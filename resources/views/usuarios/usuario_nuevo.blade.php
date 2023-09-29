<?php $page = 'index'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="departments.html">HOME </a></li>
                            <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                            <li class="breadcrumb-item active">Nuevo Usuario</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                
                    <div class="card">
                        <div class="card-body">
                            <form action="POST" action="{{ route('usuario.datoregistrar') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-heading">
                                            <h4>Añadir Usuario</h4>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-xl-12">  
                                        <div class="form-group local-forms">
                                            <label >Nombre Completo <span class="login-danger">*</span></label>
                                            <input class="form-control" id="name" name="name" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-4">  
                                        <div class="form-group local-forms">
                                            <label >Tel&eacute;fono </label>
                                            <input class="form-control" id="user_telefono" name="user_telefono" type="number" >
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-4">  
                                        <div class="form-group local-forms">
                                            <label >Correo Electrónico <span class="login-danger">*</span></label>
                                            <input class="form-control" id="email" name="email" type="email" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-4">  
                                        <div class="form-group local-forms">
                                            <label >Contraseña <span class="login-danger">*</span></label>
                                            <input class="form-control" id="password" name="password" type="password" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-4">
                                        <div class="form-group local-forms cal-icon">
                                            <label >Rol  <span class="login-danger">*</span></label>
                                            <select class="form-control" id="rol_id" name="rol_id">
                                                @forelse ($listaDeRoles as $datoRol)
                                                    <option value="{{ $datoRol->id }}">{{ $datoRol->rol_name }}</option>
                                                @empty
                                                <option value="" >SIN DATOS</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-4">
                                        <div class="form-group local-forms cal-icon">
                                            <label >Sucursal  <span class="login-danger">*</span></label>
                                            <select class="form-control" id="sucursal_id" name="sucursal_id">
                                                @forelse ($listaDeSucursales as $datoSucursal)
                                                    <option value="{{ $datoSucursal->id }}">{{ $datoSucursal->suc_nombre }}</option>
                                                @empty
                                                <option value="" >SIN DATOS</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group select-gender">
                                            <label class="gen-label">Status <span class="login-danger">*</span></label>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="user_estado" value="1" class="form-check-input">ACTIVO
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="user_estado" value="0" class="form-check-input">INACTIVO
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="doctor-submit text-end">
                                            <button type="submit" class="btn btn-primary submit-form me-2">REGISTRAR USUARIO</button>
                                            <button type="cancel" class="btn btn-primary cancel-form">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>							
                </div>					
            </div>
        </div>
    </div>
    @component('components.sidebar')
    @endcomponent
@endsection
