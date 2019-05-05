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
                <li class="breadcrumb-item active">
                    <strong>childs</strong>
                </li>
            </ol>
        </div>
        <div class="col-sm-8">
            <div class="title-action">
                <a href="{{ route('categories.index') }}" class="btn btn-primary b-r-xs">Thêm danh mục chính <i class="fas fa-plus"></i></a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="form-group row bg-white pb-4">
        <div class="col-md-12 position-alert">
            @include('admin.includes.alert')
        </div>
        <div class="container">
            <div class="mt-4">
                <div class="row">
                    <aside class="col-sm-5 border-right">
                        <article class="card-body">
                            @include('admin.contents.categories.tree')                  
                        </article>
                    </aside>
                    <aside class="col-sm-7">
                        <article class="card-body p-5 mb-5">
                            <h3><i class="fas fa-pencil-alt"></i> Tạo danh mục phụ</h3>
                            <hr>
                            {!! Form::open(array('url' => 'admin/categories', 'method' => 'POST')) !!}
                            <div class="form-group required">
                                {!! Form::label('name', 'Tên danh mục', ['class' => 'font-weight-bold']) !!}
                                {!! Form::text('name', '', ['class' => $errors->has('name') ? 'form-control error' : 'form-control', 'placeholder' => 'Nhập tên danh mục']) !!}
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group required">
                                {!! Form::label('parent_id', 'Thuộc danh mục', ['class' => 'font-weight-bold']) !!}
                                <select name="parent_id" class="{{ $errors->has('parent_id') ? 'form-control error' : 'form-control' }}">
                                    <option selected="selected" value>-- Chọn danh mục chính --</option>
                                    @foreach ($categories_parent as $categories)
                                        <option value="{{ $categories->id }}">{!! $categories->name !!}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('parent_id') }}</span>
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Lưu danh mục', ['class' => 'btn btn-dark border-0 shadow b-r-xs']) !!}
                            </div>
                            {!! Form::close() !!}
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
