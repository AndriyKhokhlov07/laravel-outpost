<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;


class BlogController extends Controller
{

    public function getBlogView()
    {
        return view('blog');
    }
}
