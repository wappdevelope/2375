<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function r404($data)
    {
        return view('404', [
            'data' => $data,
        ]);
    }
}
