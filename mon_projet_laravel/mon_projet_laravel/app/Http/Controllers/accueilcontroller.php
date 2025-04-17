<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class accueilcontroller extends Controller
{
    //il existe plusieurs methodes dans le controller (action)
    //dans le controller on va definir la methode index
    public function index()
    {
        return 'controller valide';
    }
    public function accueil(request $request)
    {
        $nom = 'mojahid';
        return view('accueil' , compact('nom',));
    }
    public function create(request $request)
    {
        $nom = $request->nom;
        return view('accueil', [
            'nom' => $nom,
        ]);
    }

}
