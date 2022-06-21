<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Dashboard</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ asset('public/front-end/admin/images/img.jpg') }}" alt="..."
                    class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span style="font-size: 16px">Xin chào,</span>
                <p style="font-size: 14px">
                    <?php
                            // $name = Session::get('nguoiNuocNgoai')->hoTen;
                            // if($name){
                            //     echo $name;
                            // }
					    ?>
                </p>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">

                    <li><a style="font-size: 16px" href="{{ URL::to('/dashboard') }}"><i class="fa fa-home"></i> Thông tin cá nhân</a></li>

                    <li><a style="font-size: 16px" href="{{ URL::to('/declaration') }}"><i class="fa fa-edit"></i> Thông tin nhập cảnh</span></a>
                    </li>
                    <li><a style="font-size: 16px" href="{{ route('statistic') }}"><i class="fa fa-bar-chart"></i> Hỗ trợ pháp lý</a></li>

                    <li><a style="font-size: 16px"><i class="fa fa-edit"></i> Đăng xuất</a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
