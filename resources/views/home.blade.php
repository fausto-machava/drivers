@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Voce esta logado!') }}
                    </div>

                    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                        <!-- Sidebar - Brand -->
                        <a class="sidebar-brand d-flex align-items-center justify-content-center"
                            href="">
                            <div class="sidebar-brand-icon">
                                <i class="bi bi-house-door"></i>
                            </div>
                            <div class="sidebar-brand-text mx-4">VERDANT</div>
                        </a>

                        <!-- Divider -->
                        <hr class="sidebar-divider my-0">

                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">
                                <i class="bi bi-speedometer2"></i>
                                <span>Dashboard</span></a>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider">
                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class="nav-item">

                            <a class="nav-link " href="" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <i class="bi bi-person-circle"></i>
                                <span>Utilizadores</span>
                            </a>
                            <a class="nav-link" href="" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <i class="bi bi-person"></i>
                                <span>Cliente</span>
                            </a>
                            <a class="nav-link " href="" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <i class="bi bi-truck"></i>
                                <span>Viatura</span>
                            </a>
                            <a class="nav-link " href="" data-target="#collapseTwo" aria-expanded="true"
                                aria-controls="collapseTwo">
                                <i class="bi bi-slash-circle"></i>
                                <span>Vaga</span>
                            </a>
                            <a class="nav-link " href="" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-cog">M</i>
                                <span>Modelos de viatura</span>
                            </a>
                            <a class="nav-link " href="" data-target="#collapseTwo" aria-expanded="true"
                                aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-cog">T</i>
                                <span>Tipos de viatura</span>
                            </a>
                            <a class="nav-link " href="" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <i>F</i>
                                <span>Fabricante</span>
                            </a>
                            <a class="nav-link " href="" data-target="#collapseTwo" aria-expanded="true"
                                aria-controls="collapseTwo">
                                <i class="bi bi-palette"></i>
                                <span>Cores de viatura</span>
                            </a>

                            <a class="nav-link " href="" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <i class="bi bi-file-ppt"></i>
                                <span>Parqueamento</span>
                            </a>
                            <a class="nav-link " href="" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-cog">L</i>
                                <span>Levantamento</span>
                            </a>
                        </li>
                        <!-- Divider -->
                        <hr class="sidebar-divider d-none d-md-block">

                        <!-- Sidebar Toggler (Sidebar) -->
                        <div class="text-center d-none d-md-inline">
                            <button class="rounded-circle border-0" id="sidebarToggle"></button>
                        </div>

                    </ul>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="wrapper">
        <!-- ============================================== Side Bar ==================================================== -->
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">

                <a class="nav-link" href="{{ route('condutor') }}" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="bi bi-person-circle"></i>
                    <span>Condutor</span>
                </a>
                <a class="nav-link" href="{{ route('listaCondutores') }}" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="bi bi-person-circle"></i>
                    <span>Lista de condutores</span>
                </a>
                <a class="nav-link" href="{{ route('multa') }}" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="bi bi-person"></i>
                    <span>Multa</span>
                </a>

                <a class="nav-link" href="{{ route('listaMultas') }}" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="bi bi-person-circle"></i>
                    <span>Lista de Multas</span>
                </a>

                <a class="nav-link " href="" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="bi bi-truck"></i>
                    <span>Factura</span>
                </a>
                <a class="nav-link " href="{{ route('reclamacao') }}" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="bi bi-slash-circle"></i>
                    <span>Reclamacoes</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        <!-- ============================================== End Side Bar ============================================== -->


        <!-- Topbar -->
        <!-- ================================== Top bar =================================== -->
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">


                {{-- @if (session('mensagem'))
                    <div class="alert alert-success alert-dismissible fade show ml-4 me-4" role="alert">
                        {{ session('mensagem') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}
                <div class="p-4">
                    @yield('conteudo')
                </div>
            </div>

        </div>
    </div>
@endsection
