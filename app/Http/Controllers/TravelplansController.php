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
    }
    return view('travelplans', compact('travelplans','user'));
  }
}
