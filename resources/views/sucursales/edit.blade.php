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
                            <li class="breadcrumb-item active">Editar Sucursal</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('sucursales.update', $Sucursal) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-heading">
                                            <h4>Editar Sucursal</h4>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-4">
                                        <div class="form-group local-forms">
                                            <label>Nombre del Rol <span class="login-danger">*</span></label>
                                            <input class="form-control" id="suc_nombre" name="suc_nombre" type="text" value="{{$Sucursal->suc_nombre}}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-xl-12">
                                        <div class="form-group local-forms">
                                            <label>Descripci&oacute;n</label>
                                            <input class="form-control" id="suc_direccion" name="suc_direccion" value="{{$Sucursal->suc_direccion}}" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="doctor-submit text-end">
                                            <button type="submit" class="btn btn-primary me-2">ACTUALIZAR ROL</button>
                                            <a href="{{ route('sucursales.index') }}" class="btn btn-primary cancel-form">Cancel</a>
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

