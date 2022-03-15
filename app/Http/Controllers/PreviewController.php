<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class PreviewController extends Controller
{
    public function preview(Request $request)
    {
        $find = File::where('name', $request->name)->first();

        return json_encode(array('name' => $find->name));
    }
}
