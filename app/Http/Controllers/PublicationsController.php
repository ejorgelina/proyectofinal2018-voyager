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
      'contenido' => 'required_if:foto, null',
      'foto' => 'image|required_if:contenido, null'
    ]);

    auth()->user()->publications()->create([
       'contenido' => $request->contenido,
      //'titulo'=> $request->titulo,  porque modifique la migracion de publication
      //'foto' => $path
    ]);

 if ($request->file('foto')){
    $file = $request->file('foto');
    $name = $request->user()->id . '.' . $file->extension();
    $path = $file->storePubliclyAs('imagesPublications', $name);

    auth()->user()->publications()->create([
      'foto' => $path
    ]);
}


    //return view('prueba');
    return redirect()->back();
  }

  public function edit(Publication $publication)
  {
      return view('publication-update', [
          'publication' => $publication
      ]);
  }

  public function update(Request $request, Publication $publication)
    {
        $request->validate([
            //'titulo' => 'required',
            'contenido' => 'required'

            // 'image' => 'image'
        ]);

        $publication->update($request->except('_token'));

        return redirect()->to('publication')
            ->with('message', 'Publication updated');
    }

    public function destroy(Publication $publication)
  {
      $publication->delete();

      return redirect()->back()->with('message', 'Publication deleted');
  }


}
