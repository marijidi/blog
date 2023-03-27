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

    //Display Datos de Tabla categories
    public function categories()
    {
        $categories = Category::all();
        return view('all-categories',compact('categories'));
    }

    //Edit function para recoger categoria a editar
    public function editCategory($category_id)
    {
        $category = Category::find($category_id);
        return view('edit-category',compact('category'));
    }

    //Actualiza en la BD a la categoria
    public function updateCategory(Request $request)
    {
        $name = $request->name;
        $description = $request->description;
        $image=$request->file('file');
        //ojo aqui
        $imageName = time().'.'.$image->extension();//error en esta linea- para que funcione tiene que subir otra imagen para funcionar o poner la misma
        $image->move(public_path('images'),$imageName);

        $category = Category::find($request->category_id);
        $category->name=$name;
        $category->description=$description;
        $category->image= $imageName;
        $category->save();

        return back()->with('category_updated','Category record has been updated');//Message Alert
    }

    //Funcion que elimina registro (categoria)
    public function deleteCategory($category_id)
    {
        $category = Category::find($category_id);
        unlink(public_path('images').'/'.$category->image);
        $category->delete();
        return back()->with('category_deleted','Category deleted successfully!');
    }
}
