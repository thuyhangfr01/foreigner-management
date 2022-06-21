<!-- top navigation -->

<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            {{-- <a id="menu_toggle"><i class="fa fa-bars"></i></a> --}}
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle d-flex" aria-haspopup="true" id="navbarDropdown"
                        data-toggle="dropdown" aria-expanded="false">
                        <img  src="{{ asset('public/front-end/admin/images/img.jpg') }}" alt="">
                        <p style="font-size: 16px; margin-top: 7px">
                            <?php
                            $name = Session::get('admin_name');
                            if($name){
                                echo $name;
                            }
					    ?>
                        </p>
                        
                    </a>
                    <div style="font-size: 15px" class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="javascript:;"> Thông tin cá nhân</a>
                        <a class="dropdown-item" href="javascript:;">
                            <span>Cài đặt</span>
                        </a>
                        <a class="dropdown-item" href="javascript:;">Trợ giúp</a>
                        <a class="dropdown-item" href="{{URL::to('/admin-logout')}}"><i class="fa fa-sign-out pull-right"></i> Đăng xuất</a>
                    </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class=" info-number" id="navbarDropdown1"
                        data-toggle="dropdown" aria-expanded="false">
                        {{-- <i class="fa fa-envelope-o"></i> --}}
                        {{-- <span class="badge bg-green">6</span> --}}
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                        <li class="nav-item">
                            <a class="dropdown-item">
                                {{-- <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span> --}}
                                <span>
                                    <span>John Smith</span>
                                    <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item">
                                {{-- <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span> --}}
                                <span>
                                    <span>John Smith</span>
                                    <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item">
                                {{-- <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span> --}}
                                <span>
                                    <span>John Smith</span>
                                    <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item">
                                {{-- <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span> --}}
                                <span>
                                    <span>John Smith</span>
                                    <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="text-center">
                                <a class="dropdown-item">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->
