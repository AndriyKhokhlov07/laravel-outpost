<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;


class HotDealsController extends Controller
{

    public function getHotDealsView()
    {
        return view('hot-deals');
    }
}
