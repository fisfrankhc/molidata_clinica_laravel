<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursale;

class SucursalesController extends Controller
{
    public function index()
    {
        $Sucursales = Sucursale::all();
        return view('sucursales.index', compact('Sucursales'));
    }

    public function create()
    {
        return view('sucursales.create');
    }

    public function store(Request $request)
    {
        $datosSucursal = new Sucursale;
        $datosSucursal->suc_nombre = $request->input('suc_nombre');
        $datosSucursal->suc_direccion = $request->input('suc_direccion');
        $datosSucursal->save();
        return redirect()->route('sucursales.index');
    }

    public function show()
    {
    }

    public function edit($Sucursale)
    {
        $Sucursal = Sucursale::find($Sucursale);
        return view('sucursales.edit', compact('Sucursal'));
    }

    public function update(Request $request, $sucursalId){
        $datosSucursal = Sucursale::find($sucursalId);
        $datosSucursal->suc_nombre = $request->input('suc_nombre');
        $datosSucursal->suc_direccion = $request->input('suc_direccion');
        $datosSucursal->update();
        return redirect()->route('sucursales.index');
    }

    public function destroy($roleId){
        $datosRol=Sucursale::find($roleId);
        $datosRol->delete();
        return redirect()->route('sucursales.index');
    }
}
