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
                            <li class="breadcrumb-item active">Editar Usuario</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('usuarios.update', $Usuario) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-heading">
                                            <h4>Editar Usuario</h4>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-xl-12">
                                        <div class="form-group local-forms">
                                            <label>Nombre Completo <span class="login-danger">*</span></label>
                                            <input class="form-control" id="name" name="name" type="text"
                                                value="{{ $Usuario->name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-4">
                                        <div class="form-group local-forms">
                                            <label>Tel&eacute;fono </label>
                                            <input class="form-control" id="user_telefono" name="user_telefono"
                                                value="{{ $Usuario->user_telefono }}" type="number">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-4">
                                        <div class="form-group local-forms">
                                            <label>Correo Electrónico <span class="login-danger">*</span></label>
                                            <input class="form-control" id="email" name="email" type="email"
                                                value="{{ $Usuario->email }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-4">
                                        <div class="form-group local-forms">
                                            <label>Contraseña <span class="login-danger">*</span></label>
                                            <input class="form-control" id="password" name="password"
                                                value="{{ $Usuario->password }}" type="password" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-4">
                                        <div class="form-group local-forms cal-icon">
                                            <label>Rol <span class="login-danger">*</span></label>
                                            <select class="form-control" id="rol_id" name="rol_id">
                                                <option selected value="{{ $Usuario->rol_id }}">{{ $Usuario->rolDeUsuario->rol_name }}
                                                </option>
                                                @forelse ($listaDeRoles as $datoRol)
                                                    <option value="{{ $datoRol->id }}">{{ $datoRol->rol_name }}</option>
                                                @empty
                                                    <option value="">SIN DATOS</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-4">
                                        <div class="form-group local-forms cal-icon">
                                            <label>Sucursal <span class="login-danger">*</span></label>
                                            <select class="form-control" id="sucursal_id" name="sucursal_id">
                                                <option selected value="{{ $Usuario->sucursal_id }}">{{ $Usuario->sucursalDeUsuario->suc_nombre }}
                                                </option>
                                                @forelse ($listaDeSucursales as $datoSucursal)
                                                    <option value="{{ $datoSucursal->id }}">{{ $datoSucursal->suc_nombre }}
                                                    </option>
                                                @empty
                                                    <option value="">SIN DATOS</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">

                                        <div class="form-group select-gender">
                                            <label class="gen-label">Status <span class="login-danger">*</span></label>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="user_estado" value="1"
                                                        class="form-check-input"
                                                        @if ($Usuario->user_estado == '1') checked @endif>ACTIVO
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="user_estado" value="0"
                                                        class="form-check-input" @if ($Usuario->user_estado == '0') checked @endif>INACTIVO
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="doctor-submit text-end">
                                            <button type="submit" class="btn btn-primary me-2">ACTUALIZAR USUARIO</button>
                                            <a href="{{ route('usuarios.index') }}"
                                                class="btn btn-primary cancel-form">Cancel</a>
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
