<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
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
