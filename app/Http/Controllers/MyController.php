<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Formations;
use App\Models\Etudiants;

use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\FormatterHelper;

class MyController extends Controller
{
    public function createPost()
    {
        $post = new Post();
        $post->title = 'Life';
        $post->content = 'Life is what happens while you are busy making other plans';
        $post->save();
        return $post;
    }

    public function affichePost(Request $request)
    {
        $title = $request->get('title');
        $content = $request->get('content');

        $post = new Post();
        $post->title = $title;
        $post->content = $content;
        $post->save();
        
        $listePosts = Post::all();
        return view('acceuilBlog', ['list' => $listePosts]);
    }

    // Création de données pour les étudiant et la formation
    public function create(){

        $L2Info = Formations::find(1) ;
        echo $L2Info->intitule;
        
    }
}
