<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
        $resto ='';
        if(request('category'))
        {
            $category = Category::firstWhere('slug', request('category'));
            $resto = 'dalam'. $category->name;
        }

        return view('daftarresto',
        [
            "title"=>"Daftar Resto",
            "posts"=> Post::latest()->filter(request(['search', 'category']))->paginate(10)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {  
        return view('post',
        [
            "title"=> $post->resto,
            "post" => $post
        ]);
    }
}
