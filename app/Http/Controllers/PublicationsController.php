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

    if ($request->file('foto')){
       $file = $request->file('foto');
       $name = $request->user()->id . '.' . $file->extension();
       $path = $file->storePubliclyAs('public/imagesPublications', $name);
     }

    $pub = auth()->user()->publications()->create([
       'contenido' => $request->contenido,
      'foto' => 'imagesPublications/' . $name
    ]);

  //  if ($request->file('foto')){
  //     $file = $request->file('foto');
  //     $name = $request->user()->id . '.' . $file->extension();
  //     $path = $file->storePubliclyAs('imagesPublications', $name);
  //
  //     $pub->foto = $path;
  //     $pub->save();
  // }

     return redirect('publications');
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
            'contenido' => 'required'

            // 'image' => 'image'
        ]);

        $publication->update($request->except('_token'));

        return redirect()->to('publication');
    }

    public function destroy(Publication $publication)
  {
      $publication->delete();

      return redirect()->back()->with('message', 'Publication deleted');
  }


}
