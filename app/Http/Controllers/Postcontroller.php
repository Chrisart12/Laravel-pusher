<?php

namespace App\Http\Controllers;

use App\Post;
use App\Notifications\Etape;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;

class Postcontroller extends Controller
{
    use Notifiable;

    public function index()
    {
        // dd(\auth()->user());
        // Notification
        $user = auth()->user();
        $page = 'Posts';

        $posts = Post::all();

        Notification::send($user, new Etape($user, $page));

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        
        return $this->save($post, $request->all());
    }

    public function save(Post $post, Array $input)
    {
        $post->user_id = auth()->id();
        $post->title = $input['title'];
        $post->description = $input['description'];

        $post->save();

        return redirect()->route('posts.index');
        
    }

    public function like(Request $request)
    {
        dd("eeeee");
    }


    public function update()
    {
        
    }

    public function show()
    {

    }

    public function edit()
    {

    }
}
