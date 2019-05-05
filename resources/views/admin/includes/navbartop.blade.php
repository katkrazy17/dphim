<div class="row border-bottom">
    <nav class="navbar navbar-static-top {{ !empty($__env->yieldContent('page-heading')) ? '' : 'white-bg' }} " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
        @if (Auth::guard('admin')->check())
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="m-r-sm text-muted welcome-message">Xin chào, <span class="text-info font-weight-bold">{{ Auth::guard('admin')->user()->first_name ." ". Auth::guard('admin')->user()->last_name }} <b class="caret"></b></span></span>
                </a>
                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                    <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#changePassword">Thay đổi mật khẩu</a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Đăng xuất</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('admin.logout') }}">
                    <i class="fas fa-sign-out-alt"></i>Đăng xuất
                </a>
            </li>
        </ul>
        @endif
    </nav>
</div>
@include('admin.modals.admins.change_password')