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
                <strong>tags</strong>
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
        {!! Form::model($tags, array('route' => array('tags.update', $tags->slug), 'method' => 'put')) !!}
        {!! csrf_field() !!}
        <div class="container mt-5">
            <div class="form-group row">
                <div class="col-md-12">
                    <h3><i class="fas fa-pencil-alt"></i> Sửa Tags</h3>
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
                                {!! Form::text('name', $tags->name, ['class' => $errors->has('name') ? 'form-control error' :
                                'form-control', 'placeholder' => 'Nhập tên tags']) !!}
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group">
                                <div class="row ml-0">
                                    {!! Form::label('', 'Trạng thái : ', ['class' => 'font-weight-bold']) !!}
                                    <div class="custom-control custom-switch ml-4">
                                        <input type="checkbox" name="status" class="custom-control-input" id="status" {{($tags->status != null) ? 'checked value=1':'value=0'}}>
                                        <label for="status" class="custom-control-label">{{ ($tags->status != null) ? 'Công khai':'Tạm ẩn' }}</label>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Lưu', ['class' => 'btn btn-dark border-0 shadow b-r-xs']) !!}
                                <a href="{{ route('tags.index') }}" class="btn btn-light btn-outline-dark b-r-xs">Hủy</a>
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