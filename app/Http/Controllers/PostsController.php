<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;


class PostsController extends Controller
{
    
    public function index()
    {
        return view('blog.index')->with('posts', Post::get());

    }

    
    public function create()
    {
        return view('blog.create');
    }

    
    public function store(Request $request)
    {
 
        $request ->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:svg,png,jpg|max:5048',
        ]);
        
        $slug = Str::slug($request->title, '-');

        $newImageName = uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        Post::create([
            'slug' => $slug,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/blog');
       
    }

    
    public function show($slug)
    {
        return view('blog.show');
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
