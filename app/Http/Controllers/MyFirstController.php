<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    public function index()
    {
        return "Hello world";
    }

    public function indexWithParams($param1, $param2)
    {
        $model = [
            'param1' => $param1,
            'param2' => $param2
        ];


        return view('hello-view', $model);
    }

    public function indexWithQueryParams(Request $request)
    {
        $p1 = $request->input('p1');

        $p2 = $request->input('p2');

        var_dump($p1);
        var_dump($p2);
    }
}