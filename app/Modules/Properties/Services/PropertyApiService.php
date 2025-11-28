<?php

namespace Modules\Properties\Services;

use CodeIgniter\HTTP\Exceptions\HTTPException;

class PropertyApiService
{
    protected string $baseAPIUrl;
    protected string $apiKey;

    public function __construct()
    {
        $this->baseAPIUrl = getenv('API_URL');
        $this->apiKey     = getenv('API_KEY');
    }

    private function client()
    {
        return \Config\Services::curlrequest();
    }

    private function headers(): array
    {
        return [
            'Accept'       => 'application/json',
            'X-API-KEY'    => $this->apiKey,
            'Authorization' => 'Bearer ' . session('auth_token'),
        ];
    }

    public function all(array $filters = []): ?array
    {
        $response = $this->client()->get(
            $this->baseAPIUrl . '/properties',
            [
                'headers' => $this->headers(),
                'query'   => $filters,
                'http_errors' => false,
            ]
        );

        return json_decode($response->getBody(), true);
    }

    public function find(int $id): ?array
    {
        $response = $this->client()->get(
            $this->baseAPIUrl . "/properties/{$id}",
            [
                'headers' => $this->headers(),
                'http_errors' => false,
            ]
        );

        return json_decode($response->getBody(), true);
    }

    /**
     * Metodo responsavel por retornar os imoveus atraves dos filtros
     * @param array $filters
     */
    public function search(array $filters = []): ?array
    {
        $client = \Config\Services::curlrequest();
        
        // Remove filtros vazios
        $filters = array_filter($filters, function ($value) {
            return $value !== null && $value !== '';
        });
        
        try {
            $response = $client->get($this->baseAPIUrl . '/properties', [
                'headers' => $this->headers(),
                'query'   => $filters,
                'http_errors' => false,
            ]);
            
            return json_decode($response->getBody(), true);
        } catch (\Throwable $e) {
            log_message('error', 'Erro ao buscar imóveis: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Metodo responsavel por fazer uma requisicao na API e retorna o numero total de imoveis para cada categoria
     */
    public function countByType(): array
    {
        $result = $this->search([]); // Busca TUDO de uma vez

        $items = $result['data'] ?? [];

        // Mapeamento dos types
        $map = [
            10 => 'apartamento',
            11 => 'moradia',
            12 => 'terreno',
            13 => 'comercial',
            14 => 'quarto',
            15 => 'garagem',
            16 => 'armazem',
            17 => 'escritorio',
            18 => 'outro',
        ];

        $counts = array_fill_keys(array_values($map), 0);

        foreach ($items as $property) {
            $typeId = (int) ($property['property_type_id'] ?? 0);

            if (isset($map[$typeId])) {
                $key = $map[$typeId];
                $counts[$key]++;
            }
        }

        return $counts;
    }

    /**
     * Metodo responsavel por fazer uma requisicao na API e retorna o numero total de imoveis para cada categoria
     * @param array $data   // ID's das categorias desejadas
     */
    public function countByTypeCustom(array $typeIds): array
    {
        $result = $this->search([]); // 1 requisição apenas

        $items = $result['data'] ?? [];

        $counts = [];

        foreach ($typeIds as $id => $label) {
            $counts[$label] = 0;
        }

        foreach ($items as $property) {
            $id = (int) $property['property_type_id'];

            if (isset($typeIds[$id])) {
                $label = $typeIds[$id];
                $counts[$label]++;
            }
        }

        return $counts;
    }

    public function create(array $data): ?array
    {
        $response = $this->client()->post(
            $this->baseAPIUrl . "/properties",
            [
                'headers' => $this->headers(),
                'json'    => $data,
                'http_errors' => false,
            ]
        );

        return json_decode($response->getBody(), true);
    }

    public function update(int $id, array $data): ?array
    {
        $response = $this->client()->put(
            $this->baseAPIUrl . "/properties/{$id}",
            [
                'headers' => $this->headers(),
                'json'    => $data,
                'http_errors' => false,
            ]
        );

        return json_decode($response->getBody(), true);
    }

    public function delete(int $id): bool
    {
        $response = $this->client()->delete(
            $this->baseAPIUrl . "/properties/{$id}",
            [
                'headers' => $this->headers(),
                'http_errors' => false,
            ]
        );

        return $response->getStatusCode() === 204;
    }
}
