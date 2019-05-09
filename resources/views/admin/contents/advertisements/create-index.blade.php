@extends('admin.layouts.master') 
@section('title','Quản lý quảng cáo') 
@section('page-heading')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2 class="text-uppercase font-weight-bold">Quản lý quảng cáo</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Advertisement</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection
@section('content')
    <div class="form-group row bg-white pb-4">
        <div class="col-md-12 position-alert">
            @include('admin.includes.alert')
        </div>
        <div class="col-md-5">
            {!! Form::open(array('url' => 'admin/advertisements', 'method' => 'POST')) !!} 
            {!! csrf_field() !!}
            <div class="container mt-5">
                <div class="form-group row">
                    <div class="col-md-12">
                        <h3><i class="fas fa-pencil-alt"></i> Tạo mới quảng cáo</h3>
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
                                    {!! Form::label('distributor', 'Tên nhà cung cấp', ['class' => 'font-weight-bold']) !!} 
                                    {!! Form::text('distributor', '', ['class' => $errors->has('distributor') ? 'form-control error' : 'form-control', 'placeholder' => 'Nhập tên nhà cung cấp']) !!}
                                    <span class="text-danger">{{ $errors->first('distributor') }}</span>
                                    {!! Form::label('link', 'Đường dẫn quảng cáo', ['class' => 'font-weight-bold']) !!} 
                                    {!! Form::text('link', '', ['class' => $errors->has('link') ? 'form-control error' : 'form-control', 'placeholder' => 'Nhập đường dẫn quảng cáo']) !!}
                                    <span class="text-danger">{{ $errors->first('link') }}</span>
                                    {!! Form::label('position', 'Vị trí của quảng cáo', ['class' => 'font-weight-bold']) !!} 
                                    {!! Form::text('position', '', ['class' => $errors->has('position') ? 'form-control error' : 'form-control', 'placeholder' => 'Nhập vị trí của quảng cáo']) !!}
                                    <span class="text-danger">{{ $errors->first('position') }}</span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::submit('Lưu quảng cáo', ['class' => 'btn btn-dark border-0 shadow b-r-xs']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-md-7">
            @include('admin.contents.advertisements.table')
        </div>
    </div>
@endsection
