<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Collaborator;
use App\Models\Service;


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
        $services = Service::with('category')->get();
        return view('service',compact('services'));


    }

      

}

