<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    Public function index(Request $request){
        $request->route()->getName(); 
        $request->path();
        dd($request);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'marca' => 'required|string|max:100',
            'modelo' => 'required|string|max:100',
            'anio' => 'required|integer|between:1900,' . now()->year,
            'kilometros' => 'required|integer|min:0',
            'precio' => 'required|numeric|min:0',
        ]);

        $validated['user_id'] = auth()->id();

        $post = Post::create($validated);

        return response()->json($post, 201);
    }
}
