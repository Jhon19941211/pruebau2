<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasatiempo;
use Illuminate\Support\Facades\DB;

class PasatiempoController extends Controller
{
    //
    public function pasatiempo()
    {
        return view('pasatiempo');
    }

    public function crear()
    {
        return view('newpasatiempo');
    }

    public function create(Request $request)
    {
       
        $id=\Auth::user()->id;

        $validate=$this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
        ]);

   
        $name=$request->input('name');
    
         //setear la info

         $pasatiempo=new Pasatiempo();
         
        $pasatiempo->name=$name;
        $pasatiempo->user_id=$id;
      
        $pasatiempo->save();


        return redirect()->route('crearpasatiempo')
        ->with(['message'=>'Se ha creado con satisfactoriamente']);
        
    }

    public function listar()
    {
        $id=\Auth::user()->id;
   
         $pasatiempos =   DB::table('pasatiempo')->where('user_id',$id)->get();

      //   var_dump($pasatiempos); die();
        return view('verpasatiempos', ['pasatiempos' => $pasatiempos]);
    }


}
