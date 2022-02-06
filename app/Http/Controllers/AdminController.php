<?php

namespace App\Http\Controllers;

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
