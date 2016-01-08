<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\User;
use Illuminate\Http\Request;
use App\Article;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $users = DB::table('articles')
                   ->orderBy('created_at', 'desc')->get();

        $posts = Article::orderBy('created_at','desc')->simplePaginate(5);

        return view('sample.index',compact('posts'));
    }

    public function show($id)
    {
        $article = Article::findBySlug($id);

        return view('sample.show',compact('article'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(CreatePostRequest $request)
    {
        $request->merge(['image_header_url' => 'assets/image','user_id' => 1,'slug'=>Str::slug($request->input('title'))]);

        $post = new Article($request->all());

        $fileName = $post->savePicture($request->file('image'));

        $post->image_header_url = url($fileName);

        $user = User::find(1);

        return $user->articles()->save($post);

    }
}
