@extends('admin.layouts.master') 
@section('title','Quản lý đạo diễn') 
@section('page-heading')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2 class="text-uppercase font-weight-bold">Quản lý đạo diễn</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Đạo diễn</strong>
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
        <div class="col-md-12">
            {!! Form::open(array('url' => 'admin/directors', 'method' => 'POST')) !!} 
            {!! csrf_field() !!}
            <div class="container mt-5">
                <div class="col-md-12">
                    <h3><i class="fas fa-edit"></i> Tạo mới đạo diễn</h3>
                </div>
            <div class="form-group border-0 shadow">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-uppercase font-weight-bold">
                            Tạo mới đạo diễn
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="form-row">
                                <div class="col-md-4">
                                <div class="form-group required">
                                    {!! Form::label('first_name', 'Họ lót', ['class' => 'font-weight-bold']) !!} 
                                    {!! Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => 'Nhập họ lót']) !!}
                                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group required">
                                    {!! Form::label('last_name', 'Tên', ['class' => 'font-weight-bold']) !!} 
                                    {!! Form::text('last_name', '', ['class' => 'form-control', 'placeholder' => 'Nhập tên']) !!}
                                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                </div>
                                </div>
                                <div class="col-md-4">                                
                                <div class="form-group">
                                    {!! Form::label('job', 'Công việc', ['class' => 'font-weight-bold']) !!}
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="job" id="" value="option1" checked>
                                    <label class="form-check-label" for="job">
                                    Đạo diễn
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="job" id="" value="option2">
                                    <label class="form-check-label" for="job">
                                    Diễn viên
                                    </label>
                                    </div>                                
                                <span class="text-danger">{{ $errors->first('job') }}</span>
                                </div>
                                </div>
                                </div>
                                <div class="form-row">
                                <div class="col-md-4">
                                <div class="form-group required">
                                    {!! Form::label('height', 'Chiều cao', ['class' => 'font-weight-bold']) !!} 
                                    {!! Form::number('name', '', ['class' => 'form-control', 'placeholder' => 'Nhập chiều cao']) !!}
                                    <span class="text-danger">{{ $errors->first('height') }}</span>
                                </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group required">
                                    {!! Form::label('weight', 'Cân nặng', ['class' => 'font-weight-bold']) !!} 
                                    {!! Form::number('name', '', ['class' => 'form-control', 'placeholder' => 'Nhập cân nặng']) !!}
                                    <span class="text-danger">{{ $errors->first('weight') }}</span>
                                </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group required">
                                    {!! Form::label('blood_group', 'Nhóm máu', ['class' => 'font-weight-bold']) !!} 
                                    <select class="form-control" id="blood_group" name="blood_group">
                                        <option>A</option>
                                        <option>B</option>
                                        <option>AB</option>
                                        <option>O</option>
                                    </select>
                                    <span class="text-danger">{{ $errors->first('blood_group') }}</span>
                                </div>
                                </div>
                                </div>
                                <div class="form-row">
                                <div class="col-md-4">
                                <div class="form-group required">
                                    {!! Form::label('hobby', 'Sở thích', ['class' => 'font-weight-bold']) !!} 
                                    {!! Form::text('hobby', '', ['class' => 'form-control', 'placeholder' => 'Nhập sở thích']) !!}
                                    <span class="text-danger">{{ $errors->first('hobby') }}</span>
                                </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group required">
                                    {!! Form::label('country', 'Quốc gia', ['class' => 'font-weight-bold']) !!} 
                                    {!! Form::text('country', '', ['class' => 'form-control', 'placeholder' => 'Nhập quốc gia']) !!}
                                    <span class="text-danger">{{ $errors->first('country') }}</span>
                                </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group required">
                                    {!! Form::label('avatar', 'Ảnh đại diện', ['class' => 'font-weight-bold']) !!} 
                                    <input type="file" class="form-control-file" id="avatar">
                                    <span class="text-danger">{{ $errors->first('avatar') }}</span>
                                </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::submit('Lưu', ['class' => 'btn btn-dark border-0 shadow b-r-xs']) !!}
                </div>
            </div>                   
        {!! Form::close() !!}
    </div>
</div>
@endsection
