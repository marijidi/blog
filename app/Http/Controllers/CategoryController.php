<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //Funcion que muestra la vista de crear nueva categoria
    public function addCategory(Request $request)
    {
        return view ('add-category');
    }
    
    //Funcion que guarda una category
    public function storeCategory(Request $request)
    {
        $name = $request->name;
        $description = $request->description;
        $image=$request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $category = new Category();
        $category->name=$name;
        $category->description=$description;
        $category->image=$imageName;
        $category->save();

        return back()->with('category_added','Category record has been inserted');//Message Alert
    }
}
