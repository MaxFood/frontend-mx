<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
   public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|max:5120', // até 5MB
        ]);

        $uploadedFileUrl = Cloudinary::upload($request->file('file')->getRealPath())->getSecurePath();

        return response()->json(['url' => $uploadedFileUrl]);
    }
}
