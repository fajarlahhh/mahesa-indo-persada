@extends('backend.layouts.default')

@section(config("app.name"))

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    @yield('header')
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    @yield('page')
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	@yield('subcontent')
</div>
@endsection

@push('scripts')
<!-- Sparkline -->
<script src="/assets/admin-lte/plugins/sparklines/sparkline.js"></script>
@endpush
