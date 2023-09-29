<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Sucursale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index(){
        $listaDeUsuarios=User::all();
        return view('usuarios.index', compact('listaDeUsuarios'));
    }

    public function create(){
        $listaDeRoles=Role::all();
        $listaDeSucursales=Sucursale::all();
        return view('usuarios.create', compact(['listaDeRoles', 'listaDeSucursales']));
    }

    public function store(Request $request){

        /* User::create([
            'name'=>$request->name,
            'user_telefono'=>$request->user_telefono,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'rol_id'=>$request->rol_id,
            'sucursal_id'=>$request->sucursal_id,
            'user_estado'=>$request->user_estado,
        ]);

        return redirect()->route('usuarios.index'); */


        $usuarioNuevo=new User;
        $usuarioNuevo->name=$request->input('name');
        $usuarioNuevo->user_telefono=$request->input('user_telefono');
        $usuarioNuevo->email=$request->input('email');
        $usuarioNuevo->password=$request->input('password');
        $usuarioNuevo->rol_id=$request->select('rol_id');
        $usuarioNuevo->sucursal_id=$request->select('sucursal_id');
        $usuarioNuevo->user_estado=$request->select('user_estado');

        $usuarioNuevo->save();
        return redirect()->route('usuarios.index');
        /* return redirect()->back(); */

    }

    public function show(User $listaDeUsuarios){
        //
    }
}
