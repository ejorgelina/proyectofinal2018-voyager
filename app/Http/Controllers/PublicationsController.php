<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class PublicationsController extends Controller
{
    public function create()
    {
        return view('publication-create');
    }

    public function index(){
      $user = Auth::user();
    //  $publications = $user->publications;
    return view('publications', compact('user'));
    }


}
