<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddClass;

class ClassController extends Controller
{
    public function addClass(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'class_name' => 'required|string',
                'class_route' => 'required|string',
            ]);

            AddClass::create([
                'class_name' => $request->class_name,
                'class_route' => $request->class_route,
            ]);

            return redirect('admin/add-class')->with('success', 'Kelas berhasil ditambahkan');
        }

        return view('admin/add-class');
    }
}
