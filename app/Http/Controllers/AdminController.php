<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\File;

class AdminController extends Controller
{
    public function index()
    {
        $files = File::get();

        return view('admin.index', [
            'files' => $files,
        ]);
    }

    public function contactUs()
    {
        $quests = ContactUs::orderBy('created_at', 'desc')->get();

        return view('admin.contact-us', [
            'quests' => $quests,
        ]);
    }

    public function edit()
    {
        $user = Auth::user();

        return view('admin.edit-account', [
            'user' => $user,
        ]);
    }

    public function updatePassword()
    {
        return view('admin.password-update');
    }
}
