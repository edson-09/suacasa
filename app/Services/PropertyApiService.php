<?php

namespace App\Services;

use CodeIgniter\HTTP\Exceptions\HTTPException;

class PropertyApiService
{
    private string $baseAPIUrl;
    private string $apiKey;

    public function __construct()
    {
        $this->baseAPIUrl = getenv('API_URL');
        $this->apiKey  = getenv('API_KEY');
    }

    public function getDestacados()
    {
        $client = \Config\Services::curlrequest();

        try {
            $response = $client->get($this->baseAPIUrl . '/properties', [
                'headers' => [
                    'Accept'       => 'application/json',
                    'X-API-KEY'    => $this->apiKey
                ],
                'http_errors' => false
            ]);

            return json_decode($response->getBody(), true);

        } catch (\Throwable $e) {
            log_message('error', 'Erro ao consumir API: ' . $e->getMessage());
            return null;
        }
    }
}
