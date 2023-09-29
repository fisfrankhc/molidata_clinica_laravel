<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Sucursale;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $listaDeUsuarios = User::all();
        return view('usuarios/usuarios', compact('listaDeUsuarios'));
    }

    public function create(){
        $listaDeRoles = Role::all();
        $listaDeSucursales = Sucursale::all();
        return view('usuarios/usuario_nuevo', compact(['listaDeRoles', 'listaDeSucursales']));
    }

    public function store(Request $request){
        /* return $request->all(); */
        $usuarioNuevo = new User();
        $usuarioNuevo->name = $request->name;
        $usuarioNuevo->user_telefono = $request->user_telefono;
        $usuarioNuevo->email = $request->email;
        $usuarioNuevo->password = $request->password;
        $usuarioNuevo->rol_id = $request->rol_id;
        $usuarioNuevo->sucursal_id = $request->sucursal_id;
        $usuarioNuevo->user_estado = $request->user_estado;

        /* return $usuarioNuevo; */
        $usuarioNuevo->save();
        /* return redirect()->route('usuarios'); */
        return view('usuarios/usuarios');

    }

    public function show($usuarioVistaId){
        return "VISTA DE SHOW";
    }
}
