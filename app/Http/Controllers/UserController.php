<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function recoveryMail(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            return redirect()->route('reset.view')->with([
                'user_id' => $user->id,
                'email' => $request->email
            ]);
        }

        return redirect()->back()->with('status', 'El correo ingresado no esta registrado');
    }

    public function resetPassword(Request $request)
    {
        $user = User::find($request->user_id);
        $user->update(['password' => bcrypt($request->password)]);

        return redirect()->route('login')->with('status', 'Contraseña cambiada con exito');
    }
}
