<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function del($id)
    {
        ContactUs::find($id)->delete();

        return redirect()->back();
    }
}
