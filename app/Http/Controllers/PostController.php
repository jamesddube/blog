<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\User;
use Illuminate\Http\Request;
use App\Post;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::simplePaginate(5);

        return view('pages.index',compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findBySlug($id);

        return view('pages.post',compact('post'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(CreatePostRequest $request)
    {

        $request->merge(['image_header_url' => 'assets/image','user_id' => 1,'slug'=>Str::slug($request->input('title'))]);

        $post = new Post($request->all());

        $user = User::find(1);

        return $user->posts()->save($post);


    }
}
