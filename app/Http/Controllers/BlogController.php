<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importamos modelo Post
use App\Post;

class BlogController extends Controller
{
    public function index() {
      $posts = Post::all();
      return view("blog.index", compact('posts'));
    }
}
