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
                <a href="{{ route('categories.index') }}" class="btn btn-primary">Thêm danh mục chính <i class="fas fa-plus"></i></a>
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
                            <h3><i class="fas fa-edit"></i> Sửa danh mục phụ</h3>
                            <hr>
                            {!! Form::model($categories,array('route' => array('categories.update',$categories->slug),'method' => 'PUT')) !!}
                            {!! csrf_field() !!}
                            <div class="form-group required">
                                {!! Form::label('name', 'Tên danh mục', ['class' => 'font-weight-bold']) !!}
                                {!! Form::text('name', $categories->name, ['class' => 'form-control', 'placeholder' => 'Nhập tên danh mục']) !!}
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group required">
                                {!! Form::label('parent_id', 'Thuộc danh mục', ['class' => 'font-weight-bold']) !!}
                                <select name="parent_id" class="form-control">
                                    <option selected="selected" value>-- Chọn danh mục chính --</option>
                                    @foreach ($categories_all as $category)
                                        <option {{($category->id == $categories->parent_id) ? 'selected' : '' }} value="{{ $category->id }}">{!! $category->name !!}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('parent_id') }}</span>
                            </div>
                            <div class="form-group">
                                <div class="row ml-0">
                                    {!! Form::label('', 'Trạng thái : ', ['class' => 'font-weight-bold']) !!}
                                    <div class="custom-control custom-switch ml-4">
                                        <input type="checkbox" name="status" class="custom-control-input" id="status"
                                        {{($categories->status != null) ? 'checked value=1':'value=0'}}>
                                        {{Form::label('status', ($categories->status != null) ? 'Công khai':'Tạm ẩn', ['class' => 'custom-control-label'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Lưu thay đổi', ['class' => 'btn btn-primary border-0 shadow']) !!}
                                <a href="{{ route('categories.childs') }}" class="btn btn-light btn-outline-dark">Hủy</a>
                            </div>
                            {!! Form::close() !!}
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
