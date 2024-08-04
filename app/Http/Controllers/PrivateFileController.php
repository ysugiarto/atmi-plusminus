<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateFileController extends Controller
{
    // Storage::disk('myDisk')->put('/ANY FOLDER NAME/' . $file, $data);
	public function getImageFile($subfolder, $filename)
	{
        $path = storage_path('app/private/appdata/persons/'. $subfolder . '/img/' . $filename);
        // dd($path);
        if(file_exists($path))
        {
		    return response()->download($path, null, [], null);
        }
        else
            abort(404);
	}
}
