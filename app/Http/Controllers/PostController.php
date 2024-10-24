<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        //$posts = Post::get();
        return view('dashboard.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post = new Post();
        return view('dashboard.posts.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
    //   var_dump($request);
    //dd($request);
    $post = $request->validated();
    // $post['posted'] == 'on' ? $post['posted'] = 'yes' : $post['posted'] = 'no';

    isset($post['posted']) ? $post['posted'] = 'yes' : '' ;
    Post::create($post);
    
    return back()->with('status', '¡Datos guardados de forma exitosa!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        // dd($id);
        return view('dashboard.posts.edit', compact('post'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, Post $post)
    {
        $data = $request->validated();

        // if(isset($data['posted']) ? $data['posted'] == 'on' ?
        //      $data['posted'] = 'yes' : $data['posted'] = 'no':
        //       $data['posted'] = 'no');

        isset($data['posted']) ? $data['posted'] = 'yes' : $data['posted'] = 'no' ;

        $post->update($data);
        
        return back()->with('status', '¡Datos editados de forma exitosa!');

        // Post::where('id', $post->id)
        //     ->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // dd($post);
        $post->delete();
        return back()->with('status', '¡Datos eliminados de forma exitosa!');

    }
}
