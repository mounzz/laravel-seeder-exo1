<?php

namespace App\Http\Controllers;

use App\Models\Utilisateurs;
use Illuminate\Http\Request;

class UtilisateurEdit extends Controller
{
    public function update(Request $request, $id){
        $utilisateurs = Utilisateurs::find($id);
        $utilisateurs -> nom = $request -> nom;
        $utilisateurs -> age = $request -> age;
        $utilisateurs -> email = $request -> email;
        $utilisateurs -> tel = $request -> tel;
        $utilisateurs -> save();
        return redirect()->back();
    }
}
