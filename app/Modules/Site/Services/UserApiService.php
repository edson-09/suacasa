<?php

namespace Modules\Site\Services;

use CodeIgniter\HTTP\Exceptions\HTTPException;

class UserApiService
{
    private string $baseAPIUrl;
    private string $apiKey;

    public function __construct()
    {
        $this->baseAPIUrl  = getenv('API_URL');
        $this->apiKey  = getenv('API_KEY');
    }

    public function getDestacados(): mixed
    {
        $client = \Config\Services::curlrequest();

        try {
            $response = $client->get($this->baseAPIUrl . '/properties', [
                'headers' => [
                    'Accept'       => 'application/json',
                    'Authorization'       => 'Bearer ',
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

    public function getProperties($request): mixed
    {
        $client = \Config\Services::curlrequest();

        try {
            $queryParams = [
                'title'            => $request->getGet('title'),
                'city'             => $request->getGet('city'),
                'user_id'          => $request->getGet('user_id'),
                'price_from'       => $request->getGet('price_from'),
                'price_to'         => $request->getGet('price_to'),
                'property_type_id' => $request->getGet('property_type_id'),
            ];

            $queryParams = array_filter($queryParams, fn($value) => $value !== null && $value !== '');

            $response = $client->get($this->baseAPIUrl . '/properties', [
                'headers' => [
                    'Accept'    => 'application/json',
                    'X-API-KEY' => $this->apiKey,
                ],
                'query'       => $queryParams,
                'http_errors' => false,
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Throwable $e) {
            log_message('error', 'Erro ao consumir API: ' . $e->getMessage());
            return null;
        }
    }

    public function getPropertyBySlug($slug): mixed
    {
        $client = \Config\Services::curlrequest();

        try {
            $response = $client->get($this->baseAPIUrl . '/properties/slug' . '/' . $slug, [
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
