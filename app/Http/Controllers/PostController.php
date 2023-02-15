<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(){
        // pegando todos os registros do model
        $postList = Post::all();
        // pegando um registro por id
        $post = Post::find(1);
        $user = User::find(1);
        dd($user->posts->toArray());
        // retornando com where
        $postWhere = Post::where('title','DM1')->get();
        // retornando com where o primeiro registro
        $postWhereFirst = Post::where('title','DM1')->first();

        dd($postList,$post,$postWhere,$postWhereFirst);
        return view('postlist');
    }
    public function insert(){
        $user = User::find(1);

        $post = Post::create([
            'user_id' => $user->id,
            'title' => 'Insulina é vida',
            'cover' => 'foto2.jpg',
            'content' => 'Insulina foi criada em 1986',
            'tags' => 'diabetes,dm1,saude,importancia'
        ]);
        dd($post);
    }
    public function update(){
        
        $user = User::find(1);
        $post = Post::find(1)->update([
            'title' => 'Primeiro post =D',
            'cover' => 'foto1.jpg',
            'content' => 'Diabetes é coisa séria!',
            'tags' => 'diabetes,dm1,saude,importancia'
        ]);
        dd($post);
    }
    public function delete(){
        $post = Post::find(2);
        $post->delete();
    }

}
