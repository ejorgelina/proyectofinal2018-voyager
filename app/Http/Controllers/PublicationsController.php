<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Publication;

class PublicationsController extends Controller

{

  public function create()
  {
    return view('publication-create');
  }





  public function index(){
    $user = Auth::user();
    $publications = [];
    if ($user) {
      $publications = $user->publications->sortByDesc('created_at');
        return view('publications', compact('publications','user'));
    }


      return view('home', compact('publications','user'));

  }


  public function todas(){
    $user = Auth::user();
    $publications = Publication::orderBy('created_at', 'DESC')->paginate(5);
    return view('home', compact('publications', 'user'));
  }



  public function store(Request $request)
  {
    $request->validate ([
      'contenido' => 'required',
      'titulo'=> 'required',
      'foto' => 'image'
    ]);


    $file = $request->file('foto');

    $name = $request->user()->id . '.' . $file->extension();

    $path = $file->storePubliclyAs('publications', $name);

    auth()->user()->publications()->create([
      'contenido' => $request->contenido,
      'titulo'=> $request->titulo,
      'foto' => $path
    ]);

    return view('prueba');
  }

}
