<?php

namespace App\Http\Controllers;

use App\Models\Utilisateurs;
use Illuminate\Http\Request;

class UtilisateursController extends Controller
{
    public function home(){
        $utilisateurs = Utilisateurs::all();
        return view('home', compact('utilisateurs'));
    }

    public function store(Request $request){
        $utilsateurs = new Utilisateurs;
        $utilisateurs -> nom = $request -> nom ;
        $utilisateurs -> age = $request -> age ;
        $utilisateurs -> email = $request -> email ;
        $utilisateurs -> tel = $request -> tel ;
        $utilisateurs -> save();
        return redirect('/');
    }

    public function show($id){
        $id_show = Utilisateurs::find($id);
        return view('pages.UtilisateurEdit', compact('id_show'));
    }

    public function destroy($id){
        $destroy = Utilisateurs::find($id);
        $destroy -> delete();
        return redirect()->back();
    }

    public function deleteAll(){
        $deleteAll = Utilisateurs::truncate();
        return redirect("/");
    }
}
