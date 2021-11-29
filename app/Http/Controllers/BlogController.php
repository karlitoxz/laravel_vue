<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();
        return response()->json($blogs,200);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $blog = Blog::create($request->post());
        return response()->json([
            'blog' => $blog
        ],200);
    }


    public function show(Blog $blog)
    {
        return response()->json($blog, 200);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, Blog $blog)
    {
        $blog->fill($request->post())->save();
        return response()->json([
            'blog' => $blog
        ],200);
    }


    public function destroy(Blog $blog)
    {
        $blog->delete();
        return response()->json(['mensaje' => 'Blog eliminado'], 200);
    }
}
