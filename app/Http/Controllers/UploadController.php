<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\File;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $input = [
            'name' => $request->name,
            'file' => $request->file,
        ];

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'file' => ['required', 'mimes:pdf'],
        ])->validate();

        $path = $input['file']->store('public/files');
        $path = str_replace('public/', 'storage/', $path);

        File::create([
            'name' => $input['name'],
            'file' => $path,
        ]);

        return redirect()->back();
    }

    public function del($id)
    {
        $file = File::find($id);

        $path = str_replace('storage/', 'public/', $file->file);
        Storage::disk('local')->delete($path);

        $file->delete();

        return redirect()->back();
    }
}
