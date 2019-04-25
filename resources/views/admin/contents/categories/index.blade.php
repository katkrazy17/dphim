@extends('admin.layouts.master') 
@section('title','Quản lý danh mục') 
@section('content')
    <div class="container">
        <div class="form-group row mt-5">
            <div class="col-md-5">
                {!! Form::open(array('url' => 'categories', 'method' => 'POST')) !!} 
                {!! csrf_field() !!}
                <div class="container">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <h3>Tạo mới danh mục</h3>
                        </div>
                    </div>
                    <div class="form-group border-0 shadow">
                        <div class="card">
                            <div class="card-header bg-dark text-white text-uppercase">
                                Danh mục
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="form-group">
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
        </div>
    </div>
@endsection