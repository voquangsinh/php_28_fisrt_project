<?php

namespace App\Http\Controllers\V2;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Indexing
     */
    public function index()
    {
        $posts = Post::get();
        return view('posts.lists', ['posts' => $posts]);
    }

    public function show($post_id)
    {
        $post = Post::find($post_id);

        return view('posts.show', ['post' => $post]);
    }

    public function edit($post_id)
    {
        $post = Post::find($post_id);

        return view('posts.edit', ['post' => $post]);
    }

    public function update($post_id, Request $request)
    {
        $post = Post::find($post_id);

        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->thumbnail = $request->thumbnail;

        $post->save();

        return redirect()->route('admin.v2.posts');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'thumbnail' => $request->thumbnail,
        ];
        // $data = ['title' => 'xxxx', 'description' => 'xxx', ....]
        Post::create($data);

        return redirect()->route('admin.v2.posts');
    }

    public function destroy($post_id)
    {
        $post = Post::find($post_id);
        $post->delete();

        return redirect()->route('admin.v2.posts');
    }
}
