<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập trang quản lý Dphim</title>
    <link rel="stylesheet" href="{{ asset('vendor/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/loginadmin.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">ĐĂNG NHẬP TÀI KHOẢN</h5>
                        <div class="form-label-group">
                            @if(session('status'))
                            <p class="alert alert-danger">
                                {!! session('status') !!}
                            </p>
                            @endif
                        </div>
                        {{ Form::open(array('url' => 'admin/sign-in', 'method' => 'post', 'class' => 'horizontal')) }}
                        {{ csrf_field() }}
                            <div class="form-label-group">
                                {{Form::text('admin_name', old('admin_name'), ['class' => 'form-control', 'placeholder' => 'E-mail hoặc Tên đăng nhập','id' => 'inputEmail'])}}
                                {{Form::label('inputEmail', 'E-mail hoặc Tên đăng nhập', ['class' => 'form-label'])}}
                                @if ($errors->has('admin_name'))
                                <span class="text-danger">
                                    <span>{{ $errors->first('admin_name') }}</span>
                                </span>
                                @endif
                            </div>
                            <div class="form-label-group">
                                {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mật khẩu', 'id' => 'inputPassword'])}}
                                {{Form::label('inputPassword', 'Mật khẩu', ['class' => 'form-label'])}}
                                @if ($errors->has('password'))
                                <span class="text-danger">
                                    <span>{{ $errors->first('password') }}</span>
                                </span>
                                @endif
                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                {{Form::checkbox('remember', '0', false, ['class' => 'custom-control-input', 'id' => 'remenberCheck'])}}
                                {{Form::label('remenberCheck', 'Nhớ mật khẩu', ['class' => 'custom-control-label'])}}
                            </div>
                            {{Form::submit('Đăng nhập', ['class' => 'btn btn-lg btn-primary btn-block text-uppercase'])}}
                            <hr class="my-4">
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>