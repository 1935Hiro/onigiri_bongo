<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileImage;

class FileUpController extends Controller
{
public function index()
    {
        $data = FileImage::all();
        return view('file', compact('data'));
    }

    public function store(Request $request)
    {
        foreach($request->file('file') as $file){
            $path = $file->store('public/images');
            $filename = basename($path);
            $data = new FileImage;
            $data->file_name = $filename;
            $data->save();
        }
        
         return redirect('file')->with('success', '登録完了しました。');
    }
}
