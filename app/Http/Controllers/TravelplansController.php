<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Travelplan;

class TravelplansController extends Controller
{
  public function create()
  {
      return view('travelplan-create');
  }

//por ahora muestra todos los travelplans no solo los del usuario
  public function index(){
    $user = Auth::user();
    $travelplans = [];
    if($user){
      $travelplans=$user->travelplans;
      return view('travelplans', compact('travelplans','user'));
    }
    return view('home', compact('travelplans','user'));
  }

//agrego funcion para validar almacenamiento
  public function store(Request $request)
  {
    $request->validate ([
      'destino' => 'required_if:detalle, null',
      'detalle' => 'required_if:destino, null',
      'fecha_de_salida'=>'required_if:destino,null',
      'fecha_de_regreso'=>'required_if:destino,null',
      'presupuesto'=>'required_if:destino,null'
    ]);

    auth()->user()->travelplans()->create([
       'destino' => $request->destino,
       'detalle'=> $request->detalle,
       'fecha_de_salida'=> $request->fecha_de_salida,
       'fecha_de_regreso'=>$request->fecha_de_regreso,
       'presupuesto'=>$request->presupuesto,
    ]);
    return redirect()->back();
  }

  public function edit(Travelplan $travelplan)
  {
      return view('travelplan-update', [
          'travelplan' => $travelplan
      ]);
  }

  public function update(Request $request, Travelplan $travelplan)
    {
        $request->validate([
            //'titulo' => 'required',
            'destino' => 'required',
            'detalle'=> 'required_if:destino,null',
            'fecha_de_salida'=>'required_if:destino,null',
            'fecha_de_regreso'=>'required_if:destino,null',
            'presupuesto'=>'required_if:destino,null'
        ]);

        $travelplan->update($request->except('_token'));

        return redirect()->to('travelplan')
            ->with('message', 'Travelplan updated');
    }

    public function destroy(Travelplan $travelplan)
  {
      $travelplan->delete();

      return redirect()->back()->with('message', 'Travelplan deleted');
  }
}
