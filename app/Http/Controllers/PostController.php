<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Indexing
     */
    public function index()
    {
        $var = "HELLO PHP28";
        $html = "<h2>Sub Title V2 Controller<h2>";
        return view('posts.child', ['data' => $var, 'html' => $html]);
    }
}
