<?php

namespace App\Http\Controllers\Web\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExampleController extends Controller
{

    public function getExampleView(Request $request)
    {
        $requestParams = $request->all();
        return view('client/example', ['params' => $requestParams]);
    }
}
