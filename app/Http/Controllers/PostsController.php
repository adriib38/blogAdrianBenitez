<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Writer;
use Illuminate\Support\Str;

use App\Http\Requests\PostRequest;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //Post con el nombre y id del autor
        $posts = Post::join('writers', 'posts.writer_id', '=', 'writers.id')->paginate(4);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autores = Writer::all();
        return view('posts.create', compact('autores'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $writer = Writer::find($post->writer_id);
        return view('posts.show', compact('post', 'writer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $autores = Writer::all();
        return view('posts.edit', compact('post', 'autores'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        $posts = Post::where('visibility', 1)->paginate(4);
        return view('posts.index', compact('posts'));
    }

    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->get('titulo');
        $post->slug = Str::slug($post->title);
        $post->content = $request->get('contenido');
        $post->visibility = $request->has('visibilidad'? 1 : 0);
        $post->writer()->associate(Writer::find($request->get('autor')));
        $post->save();

        return view('posts.guardado', compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->title = $request->get('titulo');
        $post->slug = Str::slug($post->title);
        $post->content = $request->get('contenido');
        $post->visibility = $request->has('visibilidad'? 1 : 0);
        $post->writer()->associate(Writer::find($request->get('autor')));
        $post->save();

        return view('posts.modificado', compact('post'));
    }
}
