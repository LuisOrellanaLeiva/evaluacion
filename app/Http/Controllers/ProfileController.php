<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(){
        $profiles = Profile::where('name', '!=' ,'Administrador')->get();
        return view('profiles.index', compact('profiles'));
    }


}
