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

    public function store(Request $request)
    {
        $usuarioNuevo=new User;
        $usuarioNuevo->name=$request->input('name');
        $usuarioNuevo->user_telefono=$request->input('user_telefono');
        $usuarioNuevo->email=$request->input('email');
        $usuarioNuevo->password=$request->input('password');
        $usuarioNuevo->rol_id=$request->input('rol_id');
        $usuarioNuevo->sucursal_id=$request->input('sucursal_id');
        $usuarioNuevo->user_estado=$request->input('user_estado');

        $usuarioNuevo->save();
        return redirect()->route('usuarios.index');
    }

    public function show(User $listaDeUsuarios){
        //
    }

    public function edit($Usuario)
    {
        $Usuario = User::find($Usuario);
        $listaDeRoles=Role::all();
        $listaDeSucursales=Sucursale::all();
        return view('usuarios.edit', compact(['Usuario','listaDeRoles','listaDeSucursales']));
    }

    public function update(Request $request, $usuarioId){
        $datosUsuario = User::find($usuarioId);
        $datosUsuario->name=$request->input('name');
        $datosUsuario->user_telefono=$request->input('user_telefono');
        $datosUsuario->email=$request->input('email');
        $datosUsuario->password=$request->input('password');
        $datosUsuario->rol_id=$request->input('rol_id');
        $datosUsuario->sucursal_id=$request->input('sucursal_id');
        $datosUsuario->user_estado=$request->input('user_estado');

        $datosUsuario->update();
        return redirect()->route('usuarios.index');
    }

    public function destroy($usuarioId){
        $datosUsuario=User::find($usuarioId);
        $datosUsuario->delete();
        return redirect()->route('usuarios.index');
    }

}
