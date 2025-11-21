<?php

namespace App\Controllers;

use App\Models\Post;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Recent extends BaseController
{
    public function index()
    {
        // IMPORTANDO O HELPER PARA USAR A FUNÇÃO word_limiter() DE MANIPULAÇÃO DE TEXTO
        helper('text');
        $post = new Post();
        $recent = $post->select(
            'posts.id, posts.title, posts.image, posts.created_at, posts.description, categories.name as categoryName, users.firstName as userFirtsName, users.lastName as userLastName'
        )->join(
            'users',
            'users.id = posts.user_id'
        )->join(
            'categories',
            'categories.id = posts.category_id'
        )->orderBy('id', 'desc')->findAll(7);

        return view('_partials/_recent', [
            'recent' => $recent
        ]);
    }
}
