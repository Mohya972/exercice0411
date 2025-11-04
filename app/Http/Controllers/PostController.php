<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // récupèrer tous les posts et les afficher
        $posts = Post::orderBy('id','desc')->paginate(10) ;
        return view('post.index', compact('posts')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Afficher le formulaire de création d'un post
        return view('post.create') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:100',  
        ]) ;
        $post = Post::create($validated) ;
        return redirect()->route('post.index', $post)->with('success', 'Post créé avec succès !') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        
        return view('post.show', compact('post')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
