@extends('admin.layouts.master')
@section('title','Đăng nhập tài khoản')
@section('content')
    {{ Form::open(array('url' => 'admin/login', 'method' => 'post', 'class' => 'horizontal')) }}
    {{ csrf_field() }}
		<div class="row">
			<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
				<div class="card card-signin my-5">
					<div class="card-body">
						<h5 class="card-title text-center">Đăng nhập tài khoản</h5>
						<div class="form-label-group">
								@if(session('status'))
								<p class="alert alert-danger">
									{!! session('status') !!}
								</p>
							@endif     
							</div>
			      <div class="form-label-group">
							{{Form::text('admin_name', '', ['class' => 'form-control', 'placeholder' => 'E-mail của bạn hoặc tên người dùng','id' => 'inputEmail', 'required autofocus'])}}
							{{Form::label('inputEmail', 'E-mail của bạn', ['class' => 'form-label'])}}
							@if ($errors->has('email'))
									<span class="text-danger">
											<strong>{{ $errors->first('email') }}</strong>
									</span>
							@endif     
			      </div>	
            <div class="form-label-group">
							{{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mật khẩu', 'required name' => 'password', 'id' => 'inputPassword'])}}
							{{Form::label('inputPassword', 'Mật khẩu', ['class' => 'form-label'])}}
							@if ($errors->has('password'))
									<span class="text-danger">
											<strong>{{ $errors->first('password') }}</strong>
									</span>
							@endif
			      </div>
						<div class="custom-control custom-checkbox mb-4">
							{{Form::checkbox('remember', '0', false, ['class' => 'custom-control-input', 'id' => 'remenberCheck'])}}
							{{Form::label('remenberCheck', 'Nhớ mật khẩu', ['class' => 'custom-control-label'])}}
			      </div>
						{{Form::submit('Đăng nhập', ['class' => 'btn btn-lg btn-primary btn-block text-uppercase'])}}
				    <hr class="my-4">
          </div>
				</div>
			</div>
        </div>
    {{ Form::close() }}
@endsection
