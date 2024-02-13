<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;


class ColivingController extends Controller
{

    public function getColivingView()
    {
        return view('coliving');
    }
}
