<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class TravelplansController extends Controller
{
  public function create()
  {
      return view('travelplan-create');
  }

  public function index(){
    $user = Auth::user();
  //  $travelplans = $user->travelplans;
    return view('travelplans', compact('user'));
  }

}
