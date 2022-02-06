<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $find = File::where('name', $request->search)->first();

        if (!is_null($find)) {
            return view('search', [
                'name' => $request->search,
                'file' => $find->file,
            ]);
        } else {
            return redirect()->route('r404', $request->search);
        }
    }
}
