<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::with('poster')->paginate(5);
        return view('auth.userhome', ["posts"=> $posts]);
    }

    public function createPost(){
        return view('auth.postcreate');
    }

    public function savePost(Request $request){

        $post = new Post;

        $post->title = $request->title;

        $post->user_id = Auth::id();

        $post->content = $request->content;

        $post->save();
    }
}
