@if (session('status_s') )
    <div class="positon-info col-md-3">
        <ul>
            <li id="notification-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                <a class="nav-item font-weight-bold">{{ session('status_s') }}</a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </li>
        </ul>
    </div>
@elseif(session('status_w'))
    <div class="positon-info col-md-3">
        <ul>
            <li id="notification-alert" class="alert alert-warning alert-dismissible fade show" role="alert">
                <a class="nav-item font-weight-bold">{{ session('status_w') }}</a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </li>
        </ul>
    </div>
@elseif(session('status_d'))
    <div class="positon-info col-md-3">
        <ul>
            <li id="notification-alert" class="alert alert-danger alert-dismissible fade show" role="alert">
                <a class="nav-item font-weight-bold">{{ session('status_d') }}</a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </li>
        </ul>
    </div>
@elseif(session('status_i'))
    <div class="positon-info col-md-3">
        <ul>
            <li id="notification-alert" class="alert alert-info alert-dismissible fade show" role="alert">
                <a class="nav-item font-weight-bold">{{ session('status_i') }}</a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </li>
        </ul>
    </div>
@elseif(session('status_p'))
    <div class="positon-info col-md-3">
        <ul>
            <li id="notification-alert" class="alert alert-primary alert-dismissible fade show" role="alert">
                <a class="nav-item font-weight-bold">{{ session('status_p') }}</a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </li>
        </ul>
    </div>
@endif