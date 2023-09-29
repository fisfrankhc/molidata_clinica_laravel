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
                            <li class="breadcrumb-item active">Lista de usuarios</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table show-entire">
                        <div class="card-body">

                            <!-- Table Header -->
                            <div class="page-table-header mb-2">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="doctor-table-blk">
                                            <h3>USUARIOS DEL SISTEMA</h3>
                                            <div class="doctor-search-blk">
                                                <div class="top-nav-search table-search-blk">
                                                    <form>
                                                        <input type="text" class="form-control"
                                                            placeholder="Search here">
                                                        <a class="btn"><img
                                                                src="{{ asset('/assets/img/icons/search-normal.svg') }}"
                                                                alt=""></a>
                                                    </form>
                                                </div>
                                                <div class="add-group">
                                                    <a href="{{ route('usuarios.create') }}"
                                                        class="btn btn-primary add-pluss ms-2"><img
                                                            src="{{ asset('/assets/img/icons/plus.svg') }}"
                                                            alt=""></a>
                                                    <a href="javascript:;" class="btn btn-primary doctor-refresh ms-2"><img
                                                            src="{{ asset('/assets/img/icons/re-fresh.svg') }}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="javascript:;" class=" me-2"><img
                                                src="{{ asset('/assets/img/icons/pdf-icon-01.svg') }}" alt=""></a>
                                        <a href="javascript:;" class=" me-2"><img
                                                src="{{ asset('/assets/img/icons/pdf-icon-02.svg') }}" alt=""></a>
                                        <a href="javascript:;" class=" me-2"><img
                                                src="{{ asset('/assets/img/icons/pdf-icon-03.svg') }}" alt=""></a>
                                        <a href="javascript:;"><img src="{{ asset('/assets/img/icons/pdf-icon-04.svg') }}"
                                                alt=""></a>

                                    </div>
                                </div>
                            </div>
                            <!-- /Table Header -->

                            <div class="table-responsive">
                                <table class="table border-0 custom-table comman-table datatable mb-0">
                                    <thead>
                                        <tr>    
                                            <th>#</th>
                                            <th>ROL</th>
                                            <th>NOMBRE COMPLETO</th>
                                            <th>TEL&Eacute;FONO</th>
                                            <th>SUCURSAL</th>
                                            <th>ESTADO</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($listaDeUsuarios as $usuarioDato)
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $usuarioDato->rolDeUsuario->rol_name }}</td>
                                                <td class="profile-image"><a href="profile.html"><img width="28"
                                                            height="28"
                                                            src="{{ asset('/assets/img/profiles/avatar-01.jpg') }}"
                                                            class="rounded-circle m-r-5" alt=""> {{ $usuarioDato->name }}</a>
                                                </td>
                                                <td>{{ $usuarioDato->user_telefono }}</td>
                                                <td>{{ $usuarioDato->sucursalDeUsuario->suc_nombre }}</td>
                                                @if ($usuarioDato->user_estado == '1')
                                                    <td><button class="custom-badge status-green ">ACTIVO</button></td>
                                                @else
                                                    <td><button class="custom-badge status-red ">INACTIVO</button></td>
                                                @endif
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="edit-department.html"><i
                                                                    class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                data-bs-target="#delete_patient"><i
                                                                    class="fa fa-trash-alt m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <td rowspan="7">SIN DATOS</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @component('components.sidebar')
    @endcomponent
@endsection
