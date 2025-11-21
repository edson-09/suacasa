<?php

namespace App\Controllers;

use App\Services\PropertyApiService;

class PropertyController extends BaseController
{
    public function getDestacados()
    {
        $api = new PropertyApiService();
        $result = $api->getDestacados();
        $properties = $result['data'];

        foreach ($properties as $property) {
            $cards .= view('_partials/_cards/_destacado', [
                'cover_image_url' => $property['cover_image_url'],
                'nome' => 'Osvaldo',
                'title' =>  $property['title'],
                'purpose' =>  $property['purpose'],
                'address' =>  $property['address'],
                'price' =>  $property['price'],
                'bedrooms' => (string) $property['bedrooms'],
            ]);
        }

        return view('_partials/_imoveis_destacados', ['cards' => $cards]);
    }
}
