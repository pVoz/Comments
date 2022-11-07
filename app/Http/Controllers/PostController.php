<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;



class PostController extends Controller
{
    public function show($id)
{
    $post = Post::find($id);

    return view('show', compact('post'));
}
    public function index()
    {

        // $this->test("aloha");
        $cmt = new Comment();
        $posts = Post::all();
        $comment = Comment::all();
        $kunda = count($comment);
        // dd($posts);
        return view('index', [

            'posts' => $posts,

            'kunda' => $kunda,

            'monitor' => $cmt->vrat()

        ]);


            


        return view('index', compact('posts') , compact('comment'));
        
    }


private function test($text)
{
    dd($text);
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
        $post->user_id ();
        $post->save();
  
        
        // dd($post);
        return redirect('posts');
    }
 
}