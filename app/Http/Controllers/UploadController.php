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
            'file' => $request->file,
        ];

        Validator::make($input, [
            'file.*' => ['required', 'mimes:pdf'],
        ])->validate();

        for ($i = 0; $i < count($input['file']); $i++) {
            $fileName  = basename($input['file'][$i]->getClientOriginalName(), '.pdf');

            $path = $input['file'][$i]->store('public/files');
            $path = str_replace('public/', 'storage/', $path);

            File::create([
                'name' => $fileName,
                'file' => $path,
            ]);
        }

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
