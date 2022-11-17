<!--**********************************
        Nav header start
    ***********************************-->
<div class="nav-header">
    <div class="brand-logo">
        <a href="<?=PANEL;?>">
        <!--    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
            <span class="logo-compact"><img src="./images/logo-compact.jpg" alt=""></span>-->
            <span class="brand-title">
                        <img src="<?=ASSETS_BACK?>images/logo.png" alt="logo">
                    </span>
        </a>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->

<!--**********************************
    Header start
***********************************-->
<div class="header">
    <div class="header-content clearfix">

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-right">
            <ul class="clearfix">
                <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="badge badge-pill gradient-2">3</span>
                    </a>
                    <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                        <div class="dropdown-content-heading d-flex justify-content-between">
                            <span class="">2 New Notifications</span>
                            <a href="javascript:void()" class="d-inline-block">
                                <span class="badge badge-pill gradient-2">5</span>
                            </a>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="javascript:void()">
                                        <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                        <div class="notification-content">
                                            <h6 class="notification-heading">Events near you</h6>
                                            <span class="notification-text">Within next 5 days</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void()">
                                        <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                        <div class="notification-content">
                                            <h6 class="notification-heading">Event Started</h6>
                                            <span class="notification-text">One hour ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void()">
                                        <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                        <div class="notification-content">
                                            <h6 class="notification-heading">Event Ended Successfully</h6>
                                            <span class="notification-text">One hour ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void()">
                                        <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                        <div class="notification-content">
                                            <h6 class="notification-heading">Events to Join</h6>
                                            <span class="notification-text">After two days</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </li>
                <li class="icons dropdown">
                    <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                        <span class="activity active"></span>
                        <img src="images/user/1.png" height="40" width="40" alt="">
                    </div>
                    <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                </li>
                                <li>
                                    <a href="javascript:void()">
                                        <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                    </a>
                                </li>

                                <hr class="my-2">
                                <li>
                                    <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                </li>
                                <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--**********************************
    Header end ti-comment-alt
***********************************-->

<!--**********************************
    Sidebar start
***********************************-->
<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a href="<?=PANEL . 'dashboard';?>" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>

            <li class="nav-label">Blog</li>
            <li>
                <a href="<?=PANEL . 'category';?>" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Catégories</span>
                </a>
            </li>
            <li>
                <a href="<?=PANEL . 'articles';?>" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Articles</span>
                </a>
            </li>
            <li class="">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Commentaires</span>
                </a>
                <ul aria-expanded="false">
                    <li> <a href="<?=PANEL . 'comments';?>" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">En attente de validation</span>
                        </a>
                    </li>
                    <li><a href="<?=PANEL . 'comments/validate';?>" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Validés</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
