<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    public function index(post $post)
    {
        return $post->get();
    }
    //
}
