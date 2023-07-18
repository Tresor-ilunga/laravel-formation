<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): view
    {
        $posts =
            [
                'Mon premier post',
                'Mon deuxième post',
            ];


        return view('articles', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $posts = [
            1 => 'Mon titre n°1',
            2 => 'Mon titre n°2',
        ];
        $post = $posts[$id] ?? 'Article non trouvé';

        return view('article', [
            'post' => $post
        ]);
    }
}
