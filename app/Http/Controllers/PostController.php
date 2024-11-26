<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $posts = Post::leftJoin('categories', 'posts.category_id', '=', 'categories.id')
                //->fullOuterJoin('joahseoif', 'asoeifiiieidjeij', asoeiufraiseo)
                ->select('posts.*', 'categories.name as nameCategory')
                ->selectRaw("CASE 
                                WHEN posts.posted = 'yes' THEN 'Sí'
                                WHEN posts.posted = 'no' THEN 'No'
                            END AS publicado")
  
                ->orderBy('created_at', 'desc')->paginate(10);
        //$posts = Post::get();
        return view('dashboard.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post = new Post();
        $categories = Category::get();
        return view('dashboard.posts.create', compact('post', 'categories'));
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
        $categories = Category::get();
        return view('dashboard.posts.edit', compact('post', 'categories'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, Post $post)
    {
        $data = $request->validated();
        
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
