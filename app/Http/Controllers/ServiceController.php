<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ServiceController extends Controller
{
   /* public function services()
    {
        $service = Service::with('category')->get();
        $categories = Category::with('service')->get();
        $collaborator=Collaborator::with('service')->get();

        return view ('all-service', compact('service','categories'));
    }*/

    public function index()
    {
        $service = Service::with('category','collaborator')->get();
        return view('service',compact('service'));
    }
}

