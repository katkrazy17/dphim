<div class="modal inmodal" id="changePassword" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated bounceInRight">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <i class="fa fa-laptop modal-icon"></i>
                <h4 class="modal-title">Thay đổi mật khẩu</h4>
            </div>
            {!! Form::open(array('url' => 'admin/changePassword', 'method' => 'POST')) !!}
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group">
                    @if (session('checkPassword'))
                    <p class="alert alert-danger">
                        {!! session('checkPassword') !!}
                    </p>
                    @endif
                </div>
                <div class="form-group required">
                    {!! Form::label('password_old', 'Mật khẩu cũ', ['class'=>'col-form-label font-weight-bold']) !!}
                    {!! Form::password('password_old', ['class' => 'form-control', 'placeholder' => 'Vui lòng nhập mật khẩu cũ']) !!}
                    <span class="text-danger">{{ $errors->first('password_old') }}</span>
                </div>
                <div class="form-group required">
                    {!! Form::label('password_new', 'Mật khẩu', ['class' => 'font-weight-bold']) !!}
                    {!! Form::password('password_new', ['class' => 'form-control', 'placeholder' => 'Vui lòng nhập mật khẩu mới']) !!}
                    <span class="text-danger">{{ $errors->first('password_new') }}</span>
                </div>
                <div class="form-group required">
                    {!! Form::label('password_new_confirmation', 'Xác nhận mật khẩu', ['class' => 'font-weight-bold']) !!}
                    {!! Form::password('password_new_confirmation', ['class' => 'form-control', 'placeholder' => 'Vui lòng nhập mật khẩu mới']) !!}
                    <span class="text-danger">{{ $errors->first('password_new_confirmation') }}</span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white b-r-xs" data-dismiss="modal">Đóng</button>
                {!! Form::submit('Thay đổi', ['class' => 'btn btn-primary b-r-xs']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>