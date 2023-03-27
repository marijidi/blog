<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;

class ServiceController extends Controller
{
    public function services()
    {
        $service = Service::with('category')->get();
        $categories = Category::with('service')->get();
        //$collaborator=Collaborator::with('service')->get();

        return view ('all-service', compact('service','categories'));
    }
}

