<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;



class PostController extends Controller
{
    public function show($id)
{
    $post = Post::find($id);

    return view('show', compact('post'));
}
    public function index()
    {
        $posts = Post::all();
    
        return view('index', compact('posts'));
    }
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function create()
    {
        return view('post');
    }

    public function store(Request $request)
    {
        $post =  new Post;
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->user_id = 2;;
        $post->save();
        // dd($request);

        return redirect('posts');
    }
}