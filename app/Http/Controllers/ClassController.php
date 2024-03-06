<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddClass;
use App\Models\GetClass;

class ClassController extends Controller
{
    public function addClass(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'class_name' => 'required|string',
                'class_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'class_desc' => 'required|string',
                'class_route' => 'required|string',
            ]);

            $thumbnailPath = $request->file('class_thumbnail')->store('public/thumbnails');

            AddClass::create([
                'class_name' => $request->class_name,
                'class_thumbnail' => $thumbnailPath,
                'class_desc' => $request->class_desc,
                'class_price' => $request->class_price,
                'class_route' => $request->class_route,
            ]);

            return redirect('admin/add-class')->with('success', 'Kelas berhasil ditambahkan');
        }

        return view('admin/add-class');
    }

    public function class()
    {
        $classes = GetClass::all();

        return view('user/class', ['classes' => $classes]);
    }
}
