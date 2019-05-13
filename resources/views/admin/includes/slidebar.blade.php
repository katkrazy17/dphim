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
            <li>
                <a href="#"><i class="fas fa-tag"></i> <span class="nav-label">Quản lý tags</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('tags.create') }}">Tạo tags mới</a></li>
                    <li><a href="{{ route('tags.index') }}">Danh sách tags</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fas fa-info"></i><span class="nav-label">Danh mục thông tin</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Danh mục diễn viên</a>
                        <ul class="nav nav-second-level collapse">
                            <li class="ml-4"><a href="{{ route('actors.create')}}">Tạo mới diễn viên</a></li>
                            <li class="ml-4"><a href="{{ route('actors.index') }}">Danh sách diễn viên</a></li>
                        </ul>
                    </li>         
                </ul>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Danh mục đạo diễn</a>
                        <ul class="nav nav-second-level collapse">
                            <li class="ml-4"><a href="{{ route('directors.create') }}">Tạo mới đạo diễn</a></li>
                            <li class="ml-4"><a href="{{ route('directors.index') }}">Danh sách đạo diễn</a></li>
                        </ul>
                    </li>         
                </ul>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Danh mục phim</a>
                        <ul class="nav nav-second-level collapse">
                            <li class="ml-4"><a href="#{{-- {{ route('films.create') }} --}}">Tạo mới phim</a></li>
                            <li class="ml-4"><a href="{{-- {{ route('films.index') }} --}}">Danh sách phim</a></li>
                        </ul>
                    </li>         
                </ul>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Danh mục trailer</a>
                        <ul class="nav nav-second-level collapse">
                            <li class="ml-4"><a href="#">Tạo mới trailer</a></li>
                            <li class="ml-4"><a href="#">Danh sách trailer</a></li>
                        </ul>
                    </li>         
                </ul>
            </li>
            <li>
                <a href="#"><i class="fas fa-cogs"></i> <span class="nav-label">Tính năng admin</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Trackers</a></li>
                    <li><a href="#">Storage</a></li>
                    <li><a href="#">Danh mục User</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fab fa-adversal"></i> <span class="nav-label">Quản lý quảng cáo</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('advertisements.index') }}">Tạo quảng cáo</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fas fa-cogs"></i> <span class="nav-label">Show human</span><span class="fa arrow"></span></a>
            </li>
        </ul>
    </div>
</nav>