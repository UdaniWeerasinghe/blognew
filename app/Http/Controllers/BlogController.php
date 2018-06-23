<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
    	// \DB::enableQueryLog();
    	$posts = Post::with('author')->latestFirst()->paginate(4);
    	return view("blog.index", compact('posts'));
    	// view("blog.index" , compact('posts'))->render();
    	// dd(\DB::getQueryLog());
    }  
}
