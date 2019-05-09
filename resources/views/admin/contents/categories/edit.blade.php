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
                <a href="{{ route('categories.childs') }}" class="btn btn-primary b-r-xs">Thêm danh mục phụ</a>
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
            {!! Form::model($categories,array('route' => array('categories.update',$categories->slug),'method' => 'PUT')) !!}
            {!! csrf_field() !!}
            <div class="container mt-5">
                <div class="form-group row">
                    <div class="col-md-12">
                        <h3><i class="fas fa-edit"></i> Sửa danh mục</h3>
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
                                    {!! Form::text('name', $categories->name, ['class' => $errors->has('name') ? 'form-control error' : 'form-control', 'placeholder' => 'Nhập tên danh mục']) !!}
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                                <div class="form-group">
                                    <div class="row ml-0">
                                        {!! Form::label('', 'Trạng thái : ', ['class' => 'font-weight-bold']) !!}
                                        <div class="custom-control custom-switch ml-4">
                                            <input type="checkbox" name="status" class="custom-control-input" id="status" {{($categories->status != null) ? 'checked value=1':'value=0'}}>
                                            {{Form::label('status', ($categories->status != null) ? 'Công khai':'Tạm ẩn', ['class' => 'custom-control-label'])}}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Lưu thay đổi', ['class' => 'btn btn-dark border-0 shadow b-r-xs']) !!}
                                    <a href="{{ route('categories.index') }}" class="btn btn-light btn-outline-dark b-r-xs">Hủy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-md-7">
            @include('admin.contents.categories.table')
        </div>
    </div>
@endsection
