<?php

namespace App\Http\Controllers\Web\Layouts;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;

class HeaderFooterController extends Controller
{

    public function getHeaderFooterView()
    {
        return view('layouts/header-footer');
    }
}
