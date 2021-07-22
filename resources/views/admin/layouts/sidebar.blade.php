<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('template/admin/assets/img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ session('name') }}
                            <span class="user-level">{{ session('email') }}</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#" data-toggle="modal" data-target="#modal-logout">
                                    <span class="link-collapse">Logout</span>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {{ empty(Request::segment(2)) ? 'active':'' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::segment(2) == 'admin' ? 'active':'' }}">
                    <a href="{{ route('admin.index') }}">
                        <i class="fas fa-user"></i>
                        <p>Admin</p>
                    </a>
                </li>
                {{-- <li class="nav-item active">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ asset('template/admin/demo1/index.html') }}">
                                    <span class="sub-item">Dashboard 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('template/admin/demo2/index.html') }}">
                                    <span class="sub-item">Dashboard 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('template/admin/demo3/index.html') }}">
                                    <span class="sub-item">Dashboard 3</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('template/admin/demo4/index.html') }}">
                                    <span class="sub-item">Dashboard 4</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('template/admin/demo5/index.html') }}">
                                    <span class="sub-item">Dashboard 5</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('template/admin/demo6/index.html') }}">
                                    <span class="sub-item">Dashboard 6</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('template/admin/demo7/index.html') }}">
                                    <span class="sub-item">Dashboard 7</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('template/admin/demo8/index.html') }}">
                                    <span class="sub-item">Dashboard 8</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('template/admin/demo9/index.html') }}">
                                    <span class="sub-item">Dashboard 9</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
</div>