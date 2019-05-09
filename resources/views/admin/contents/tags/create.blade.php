@extends('admin.layouts.master')
@section('title','Tạo tags mới')
@section('page-heading')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="text-uppercase font-weight-bold">Tạo tags mới</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="{{ route('tags.index') }}"><strong>tags</strong></a>
            </li>
            <li class="breadcrumb-item active">
                <strong>create</strong>
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
        {!! Form::open(array('url' => 'admin/tags', 'method' => 'POST')) !!}
        {!! csrf_field() !!}
        <div class="container mt-5">
            <div class="form-group row">
                <div class="col-md-12">
                    <h3><i class="fas fa-pencil-alt"></i> Tạo mới Tags</h3>
                </div>
            </div>
            <div class="form-group border-0 shadow">
                <div class="card">
                    <div class="card-header bg-dark text-white text-uppercase font-weight-bold">
                        Tags
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="form-group required">
                                {!! Form::label('name', 'Tên tags', ['class' => 'font-weight-bold']) !!}
                                {!! Form::text('name', '', ['class' => $errors->has('name') ? 'form-control error' :
                                'form-control', 'placeholder' => 'Nhập tên tags']) !!}
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Lưu', ['class' => 'btn btn-dark border-0 shadow b-r-xs']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <div class="col-md-7">
        @include('admin.contents.tags.table')
    </div>
</div>
@endsection