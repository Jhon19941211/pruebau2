<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //

       /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function perfil()
    {
        return view('perfil');
    }

    public function actualizar(Request $request)
    {
        $user=\Auth::user();

        $id=\Auth::user()->id;

        $validate=$this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'nameuser' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],

        ]);

   
        $name=$request->input('name');
        $nameuser=$request->input('nameuser');
        $email=$request->input('email');
        $city=$request->input('city');
        $role=$request->input('role');

        $user->name=$name;
        $user->nameuser=$nameuser;
        $user->email=$email;
        $user->city=$city;
        $user->role=$role;

        $user->update();


        return redirect()->route('perfil')
        ->with(['message'=>'Se ha actualizado satisfactoriamente']);
        
    }
}
