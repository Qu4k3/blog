<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importamos modelo Post
use App\Post;

class BlogController extends Controller
{

    protected $limit = 3;
    public function index() {
      
      $posts = Post::with('author')->orderBy('created_at', 'desc')->paginate($this->limit);
      return view("blog.index", compact('posts'));
      
    }
}
