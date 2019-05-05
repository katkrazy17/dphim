<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <h2><span class="block m-t-xs font-bold text-uppercase"><i class="fa fa-film" aria-hidden="true"></i> Dphim</span></h2>
                    </a>
                </div>
                <div class="logo-element">
                    <i class="fa fa-film" style='font-size:28px' aria-hidden="true"></i>
                </div>
            </li>
            <li>
                <a href="index.html"><i class="fa fa-home"></i> <span class="nav-label">Dashboards</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-th-list"></i> <span class="nav-label">Quản lý danh mục</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('categories.index') }}">Tạo danh mục chính</a></li>
                    <li><a href="{{ route('categories.childs') }}">Tạo danh mục phụ</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>