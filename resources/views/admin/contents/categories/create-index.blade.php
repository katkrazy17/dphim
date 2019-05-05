@extends('admin.layouts.master') 
@section('title','Quản lý danh mục') 
@section('page-heading')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2 class="text-uppercase font-weight-bold">Quản lý danh mục</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>categories</strong>
                </li>
            </ol>
        </div>
        <div class="col-sm-8">
            <div class="title-action">
                <a href="{{ route('categories.childs') }}" class="btn btn-primary">Thêm danh mục phụ <i class="fas fa-plus"></i></a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="form-group row bg-white pb-4">
        <div class="col-md-12 position-alert">
            @include('admin.includes.alert')
        </div>
        <div class="col-md-5">
            {!! Form::open(array('url' => 'admin/categories', 'method' => 'POST')) !!} 
            {!! csrf_field() !!}
            <div class="container mt-5">
                <div class="form-group row">
                    <div class="col-md-12">
                        <h3><i class="fas fa-pencil-alt"></i> Tạo mới danh mục</h3>
                    </div>
                </div>
                <div class="form-group border-0 shadow">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-uppercase font-weight-bold">
                            Danh mục
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="form-group required">
                                    {!! Form::label('name', 'Tên danh mục', ['class' => 'font-weight-bold']) !!} 
                                    {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nhập tên danh mục']) !!}
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::submit('Lưu danh mục', ['class' => 'btn btn-dark border-0 shadow']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-md-7">
            @include('admin.contents.categories.table')
        </div>
    </div>
@endsection
