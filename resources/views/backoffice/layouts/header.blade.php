<div class="topbar">
    <nav class="navbar-custom">
        <div class="topbar-left">
            <a href="#" class="logo">
                <span>
                    <img src="{{ URL::asset('admin/images/users/user-1.jpg') }}" alt="logo-small" class="logo-sm">
                </span>
            </a>
        </div>
        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="button-menu-mobile nav-link waves-effect waves-light">
                    <i class="mdi mdi-menu nav-icon"></i>
                </button>
            </li>
        </ul>
        <ul class="list-unstyled topbar-nav float-right mb-0">
            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    @if (Auth::user()->foto)
                        <img src="{{ URL::asset('files/akun/' . Auth::user()->foto) }}" alt="profile-user"
                            class="rounded-circle" />
                    @else
                        <img src="{{ URL::asset('admin/images/users/user-1.jpg') }}" alt="profile-user"
                            class="rounded-circle" />
                    @endif

                    <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <?php $id = Crypt::encryptString(Auth::user()->id); ?>
                    <a class="dropdown-item" href="{{ route('akun.profile', $id) }}"><i
                            class="dripicons-user text-muted mr-2"></i>
                        Profile</a>
                    <div class="dropdown-divider"></div>
                    <form class="logout" action="{{ route('login.logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item"><i class="dripicons-exit text-muted mr-2"></i>
                            Logout</button>
                    </form>
                </div>
            </li>
        </ul>
    </nav>
</div>
<div class="page-wrapper-img">
    <div class="page-wrapper-img-inner">
        <div class="sidebar-user media">
            @if (Auth::user()->foto)
                <img src="{{ URL::asset('files/akun/' . Auth::user()->foto) }}" alt="user"
                    class="rounded-circle img-thumbnail mb-1">
            @else
                <img src="{{ URL::asset('admin/images/users/user-1.jpg') }}" alt="user"
                    class="rounded-circle img-thumbnail mb-1">
            @endif
            <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
            <div class="media-body">
                <h5 class="text-light">{{ strtoupper(Auth::user()->name) }} </h5>
                <ul class="list-unstyled list-inline mb-0 mt-2">
                    <li class="list-inline-item">
                        <?php $id = Crypt::encryptString(Auth::user()->id); ?>
                        <a href="{{ route('akun.profile', $id) }}" class=""><i
                                class="mdi mdi-account text-light"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <form class="logout" action="{{ route('login.logout') }}" method="POST">
                            @csrf
                            <button
                                style="display: inline-block;
                            background-color: rgba(248, 249, 250, 0.2);
                            width: 30px;
                            height: 30px;
                            font-size: 14px;
                            border-radius: 50%;"><i
                                    class="mdi mdi-power text-danger"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
