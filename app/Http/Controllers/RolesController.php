<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RolesController extends Controller
{
    public function index()
    {
        $Roles = Role::all();
        return view('roles.index', compact('Roles'));
    }

    public function create()
    {
        return view('roles.create');
    }

    /*     public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'rol_name' => 'required|min:3|max:240|',
            'rol_description' => 'required|min:3|max:240|'
        ]);

        Role::create([
            'rol_name'=>$request->rol_name,
            'rol_description'=>$request->rol_description,
        ]);

        return redirect()->route('roles.index');
    } */

    public function store(Request $request)
    {
        $datosRol = new Role;
        $datosRol->rol_name = $request->input('rol_name');
        $datosRol->rol_description = $request->input('rol_description');
        $datosRol->save();
        return redirect()->route('roles.index');
    }

    public function show()
    {
    }

    public function edit($Rol)
    {
        $Rol = Role::find($Rol);
        return view('roles.edit', compact('Rol'));
    }

    public function update(Request $request, $rolId){
        $datosRol = Role::find($rolId);
        $datosRol->rol_name = $request->input('rol_name');
        $datosRol->rol_description = $request->input('rol_description');
        $datosRol->update();
        return redirect()->route('roles.index');
    }

    public function destroy($roleId){
        $datosRol=Role::find($roleId);
        $datosRol->delete();
        return redirect()->route('roles.index');
    }

}

