<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collaborator;
use App\Http\Controllers\Controller;

class CollaboratorController extends Controller
{
    public function addCollaborator(Request $request)
    {
        return view ('add-collaborator');
    }
    
    //Funcion que guarda una category
    public function storeCollaborator(Request $request)
    {
        $name = $request->name;
        $lastname = $request->lastname;
        $phone = $request->phone;
        $email = $request->email;
        $image=$request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $collaborator = new Collaborator();
        $collaborator->name=$name;
        $collaborator->lastname=$lastname;
        $collaborator->phone=$phone;
        $collaborator->email=$email;
        $collaborator->image=$imageName;
        $collaborator->save();

        return back()->with('collaborator_added','collaborator record has been inserted');//Message Alert
    }

    //Display Datos de Tabla categories
    public function collaborators()
    {
        $collaborators = Collaborator::all();
        return view('all-collaborators',compact('collaborators'));
    }

    //Edit function para recoger categoria a editar
    public function editCollaborator($id)
    {
        $collaborator = Collaborator::find($id);
        return view('edit-collaborator',compact('collaborator'));
    }

    //Actualiza en la BD a la categoria
    public function updateCollaborator(Request $request)
    {
        $name = $request->name;
        $lastname = $request->lastname;
        $phone = $request->phone;
        $email = $request->email;
        $image=$request->file('file');
        //ojo aqui
        $imageName = time().'.'.$image->extension();//error en esta linea- para que funcione tiene que subir otra imagen para funcionar o poner la misma
        $image->move(public_path('images'),$imageName);

        $collaborator = Collaborator::find($request->id);
        $collaborator->name=$name;
        $collaborator->lastname=$lastname;
        $collaborator->phone=$phone;
        $collaborator->email=$email;
        $collaborator->image=$imageName;
        $collaborator->save();
        return back()->with('collaborator_updated','Collaborator record has been updated');//Message Alert
    }

    //Funcion que elimina registro (categoria)
    public function deleteCollaborator($id)
    {
        $collaborator = Collaborator::find($id);
        unlink(public_path('images').'/'.$collaborator->image);
        $collaborator->delete();
        return back()->with('collaborator_deleted','Collaborator deleted successfully!');
    }
}
