<?php

namespace App\Http\Controllers;

use DB;

use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($slug){
      return view('welcome',[
        'post'=> Post::where('slug', $slug)->firstOrFail()
      ]);
    }
}
