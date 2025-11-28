<?php

namespace Modules\Auth\Services;

use CodeIgniter\HTTP\Exceptions\HTTPException;

class UserApiService
{
    private string $baseAPIUrl;
    private string $apiKey;

    public function __construct()
    {
        $this->baseAPIUrl = getenv('API_URL');
        $this->apiKey     = getenv('API_KEY');
    }

    /**
     * Login do usuário usando a API externa.
     * Retorna array com dados ou null em caso de erro.
     */
    public function login(string $email, string $password): ?array
    {
        $client = \Config\Services::curlrequest();

        try {
            $response = $client->post($this->baseAPIUrl . '/login', [
                'headers' => [
                    'Accept'    => 'application/json',
                    'X-API-KEY' => $this->apiKey,
                ],
                'json' => [
                    'email'    => $email,
                    'password' => $password
                ],
                'http_errors' => false
            ]);

            $data = json_decode($response->getBody(), true);

            if (!isset($data['token'])) {
                return null;
            }

            // DECODIFICAR JWT PARA LER OS DADOS DO USUÁRIO
            $jwtData = $this->decodeJwt($data['token']);

            // PREPARAR USUÁRIO LOCAL
            $user = [
                'id'       => $jwtData['sub'] ?? null,
                'email'    => $jwtData['email'] ?? null,
                'role_id'  => $jwtData['role_id'] ?? null,
            ];

            // SALVAR SESSÃO
            session()->set([
                'auth_token' => (int) $data['token'],
                'user'       => $user,
                'expires'    => (int) time() + ($data['expires_in'] ?? 7200),
            ]);

            return $user;
        } catch (\Throwable $e) {
            log_message('error', 'Erro ao fazer login via API: ' . $e->getMessage());
            return null;
        }
    }


    /**
     * Logout completo
     */
    public function logout(): void
    {
        session()->destroy();
    }

    /**
     * Usuário atualmente logado (dados armazenados na sessão).
     */
    public function getCurrentUser(): ?array
    {
        return session()->get('user');
    }

    /**
     * Verifica se existe sessão ativa.
     */
    public function isLoggedIn(): bool
    {
        return session()->has('auth_token') && session()->get('expires') > time();
    }

    /**
     * Faz requisição autenticada para API usando token do usuário.
     * Útil para endpoints protegidos (/me, /favorites, /profile, etc)
     */
    public function getAuthenticated(string $endpoint): ?array
    {
        if (!$this->isLoggedIn()) {
            return null;
        }

        $client = \Config\Services::curlrequest();

        try {
            $response = $client->get($this->baseAPIUrl . $endpoint, [
                'headers' => [
                    'Accept'        => 'application/json',
                    'X-API-KEY'     => $this->apiKey,
                    'Authorization' => 'Bearer ' . session('auth_token')
                ],
                'http_errors' => false
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Throwable $e) {
            log_message('error', 'Erro ao consumir API autenticada: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Registrar novo usuário (caso exista no sistema)
     */
    public function register(array $payload): ?array
    {
        $client = \Config\Services::curlrequest();

        try {
            $response = $client->post($this->baseAPIUrl . '/auth/register', [
                'headers' => [
                    'Accept'    => 'application/json',
                    'X-API-KEY' => $this->apiKey
                ],
                'json' => $payload,
                'http_errors' => false
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Throwable $e) {
            log_message('error', 'Erro ao registrar usuário via API: ' . $e->getMessage());
            return null;
        }
    }

    private function decodeJwt(string $jwt): array
    {
        $parts = explode('.', $jwt);

        if (count($parts) !== 3) {
            return [];
        }

        return json_decode(base64_decode($parts[1]), true);
    }
}
