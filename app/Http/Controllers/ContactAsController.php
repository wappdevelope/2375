<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs as MailContactUs;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactAsController extends Controller
{
    public function req(Request $request)
    {
        $input = [
            'name' => $request->name,
            'email' => $request->email,
            'question' => $request->question,
        ];

        Validator::make($input, [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'question' => ['required', 'string'],
        ])->validate();

        ContactUs::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'question' => $input['question'],
            'status' => 0,
        ]);

        Mail::to('enquiries@igdl.org')->send(new MailContactUs($input['email']));

        return redirect()->back()->with('success', 'success');
    }
}
