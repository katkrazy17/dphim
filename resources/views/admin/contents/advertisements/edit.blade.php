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
                    <strong>advertisements</strong>
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
            {!! Form::model($advertisements,array('route' => array('advertisements.update',$advertisements->id),'method' => 'PUT')) !!}
            {!! csrf_field() !!}
            <div class="container mt-5">
                <div class="form-group row">
                    <div class="col-md-12">
                        <h3><i class="fas fa-edit"></i> Sửa quảng cáo</h3>
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
                                    {!! Form::label('distributor', 'Tên quảng cáo', ['class' => 'font-weight-bold']) !!} 
                                    {!! Form::text('distributor', $advertisements->distributor, ['class' => $errors->has('distributor') ? 'form-control error' : 'form-control', 'placeholder' => 'Nhập tên danh mục']) !!}
                                    <span class="text-danger">{{ $errors->first('distributor') }}</span>
                                    {!! Form::label('link', 'Đường dẫn', ['class' => 'font-weight-bold']) !!} 
                                    {!! Form::text('link', $advertisements->link, ['class' => $errors->has('link') ? 'form-control error' : 'form-control', 'placeholder' => 'Nhập tên đường dẫn']) !!}
                                    <span class="text-danger">{{ $errors->first('link') }}</span>
                                    {!! Form::label('position', 'Vị trí', ['class' => 'font-weight-bold']) !!} 
                                    {!! Form::text('position', $advertisements->position, ['class' => $errors->has('position') ? 'form-control error' : 'form-control', 'placeholder' => 'Nhập vị trí quảng cáo']) !!}
                                    <span class="text-danger">{{ $errors->first('position') }}</span>
                                </div>
                                <div class="form-group">
                                    <div class="row ml-0">
                                        {!! Form::label('', 'Trạng thái : ', ['class' => 'font-weight-bold']) !!}
                                        <div class="custom-control custom-switch ml-4">
                                            <input type="checkbox" name="status" class="custom-control-input" id="status" {{($advertisements->status != null) ? 'checked value=1':'value=0'}}>
                                            {{Form::label('status', ($advertisements->status != null) ? 'Công khai':'Tạm ẩn', ['class' => 'custom-control-label'])}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::submit('Lưu thay đổi', ['class' => 'btn btn-dark border-0 shadow b-r-xs']) !!}
                    <a href="{{ route('advertisements.index') }}" class="btn btn-light btn-outline-dark b-r-xs">Hủy</a>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-md-7">
            @include('admin.contents.advertisements.table')
        </div>
    </div>
@endsection
