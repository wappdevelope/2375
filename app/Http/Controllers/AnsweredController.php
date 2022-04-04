<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class AnsweredController extends Controller
{
    public function answer($id)
    {
        $quest = ContactUs::find($id);
        $quest->status = 1;
        $quest->save();

        return redirect()->back();
    }
}
