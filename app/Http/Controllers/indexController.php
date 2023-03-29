<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\categoriesRequest;
use App\Models\category;

use Illuminate\Support\Facades\Auth;

class categoryController extends Controller
{
    public function show()
    {
      $categories=category::get();
      //dd($categories->name);
      //return view('category', compact('categories'));
      return view('category', [
	  		'categories' => $categories
	  	]);
    }
}
