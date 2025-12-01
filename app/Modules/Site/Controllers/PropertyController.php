<?php


namespace Modules\Site\Controllers;

use App\Controllers\BaseController;
use Modules\Site\Services\PropertyApiService;

class PropertyController extends BaseController
{
    public function getDestacados()
    {
        $api = new PropertyApiService();
        $result = $api->getDestacados();
        $properties = $result['data'];

        $cards = '';
        foreach ($properties as $property) {
            $slug = $property['slug'];
            $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $slug);
            $slug = preg_replace('/[^\w\-]+/', '', $slug);
            $slug = strtolower($slug);

            $cards .= view('Site\Views\_partials\_cards\_destacado', [
                'cover_image_url' => $property['cover_image_url'],
                'slug' => $slug,
                'title' =>  $property['title'],
                'purpose' =>  $property['purpose'],
                'address' =>  $property['address'],
                'price' =>  $property['price'],
                'bedrooms' => $property['bedrooms'],
            ]);
        }

        return view('Site\Views\_partials\_imoveis_destacados', ['cards' => $cards]);
    }

    public function getHighlightProperty()
    {
        $api = new PropertyApiService();
        $result = $api->getDestacados();
        $properties = $result['data'];

        $cards = '';
        foreach ($properties as $property) {
            $slug = $property['slug'];
            $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $slug);
            $slug = preg_replace('/[^\w\-]+/', '', $slug);
            $slug = strtolower($slug);
            $cards .= view('_partials/_cards/_imoveis_highlights_card', [
                'id'                => $property['id'],
                'area'              => $property['area'],
                'slug'              => $slug,
                'title'             =>  $property['title'],
                'price'             =>  $property['price'],
                'gallery'           => $property['gallery'],
                'purpose'           =>  $property['purpose'],
                'address'           =>  $property['address'],
                'bedrooms'          => $property['bedrooms'],
                'description'       => $property['description'],
                'cover_image_url'   => $property['cover_image_url'],
            ]);
        }

        return view('_partials/_imoveis_highlights', ['cards' => $cards, 'total' => $result['total'] ?? 0, 'properties' => $properties]);
    }

    public function getProperties()
    {
        $api = new PropertyApiService();
        $result = $api->getProperties($this->request);
        $properties = $result['data'];

        $cards = '';
        foreach ($properties as $property) {
            $slug = $property['slug'];
            $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $slug);
            $slug = preg_replace('/[^\w\-]+/', '', $slug);
            $slug = strtolower($slug);
            $cards .= view('Site\Views\_partials\_cards\_property_card', [
                'id' => $property['id'],
                'area' => $property['area'],
                'slug' => $slug,
                'title' =>  $property['title'],
                'price' =>  $property['price'],
                'gallery' => $property['gallery'],
                'purpose' =>  $property['purpose'],
                'address' =>  $property['address'],
                'bedrooms' => $property['bedrooms'],
                'description' => $property['description'],
                'cover_image_url' => $property['cover_image_url'],
            ]);
        }

        return view('Site\_partials\_resultados', ['cards' => $cards, 'total' => $result['total'] ?? 0, 'properties' => $properties]);
    }

    public function getPropertyBySlug($slug)
    {
        $api = new PropertyApiService();
        $property = $api->getPropertyBySlug($slug);

        $images = view('Site\Views\_partials\_property\_images', ['images' => $property['gallery']]);

        $slug = $property['slug'];
        $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $slug);
        $slug = preg_replace('/[^\w\-]+/', '', $slug);
        $slug = strtolower($slug);

        return view('Site\Views\_partials\_property', [
            'cover_image_url'   => $property['cover_image_url'],
            'slug'              => $slug,
            'title'             =>  $property['title'],
            'purpose'           =>  $property['purpose'],
            'address'           =>  $property['address'],
            'price'             =>  $property['price'],
            'bedrooms'          => $property['bedrooms'],
            'bathrooms'         => $property['bathrooms'],
            'area'              => $property['area'],
            'description'       => $property['description'],
            'images'            => $images,
            // 'user' => $property['user'],
        ]);
    }

    public function getNewProperty()
    {
        // CRIAR A LOGICA DE QUANDO NAO TIVER SECCAO ACTIVA REDIRECIONA PARA O LOGIN, CASO CONTARIOS ENTRA NA PLATAFORMA
        return redirect()->to(base_url('login'));

        return view('Site\Views\pages\new-property');
    }


    public function setNewProperty($data)
    {
        // IMPLEMENTAR A LOGICA DE EXISTENCIA DE SECCAO, CASO CONTRARIO REDIRECIONA PARA A PAGINA DE LOGIN
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        exit;
    }
}
