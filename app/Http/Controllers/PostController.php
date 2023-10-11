<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;

class PostController extends Controller
{
   
    public function index(){

        $title ='';
        if(request('cotegory')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '.$category->namey;
        }
        
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' .$author->name;
        }
        return view('posts',[
            "title" => "All Posts".$title,
            "active" => "blog",
            "posts" => post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('post',[
            "title" => "Single Post",
            "active" => "blog",
            "post" => $post
        ]);
    }
}
