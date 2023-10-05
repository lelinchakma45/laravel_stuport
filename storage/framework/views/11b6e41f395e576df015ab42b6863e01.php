<!-- app-Header -->
<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="index.php">
                <img width="107" height="42" src="assets/images/brand/logo-long-d.png" class="header-brand-img desktop-logo" alt="logo">
                <img width="107" height="42" src="assets/images/brand/logo-long.png" class="header-brand-img light-logo1" alt="logo">
            </a>
            <!-- LOGO -->
            <div class="main-header-center ms-3 d-none d-lg-block">
                <form action="" method="">
                    <input type="text" class="form-control" id="typehead" placeholder="Search...">
                    <button type="submit" name="search" class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <!-- SEARCH -->
                <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false"  aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                </button>
                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2">
                            <div class="dropdown d-lg-none d-flex">
                                <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                    <i class="fe fe-search"></i>
                                </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <form class="input-group w-100 p-2" action="" method="POST">
                                        <input type="text" name="search" class="form-control" placeholder="search...">
                                        <button type="submit" name="search" class="input-group-text btn btn-primary">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- Country Language -->
                            <div class="d-flex country">
                                <a class="nav-link icon text-center" data-bs-target="#country-selector" data-bs-toggle="modal">

                                        <img src="assets/images/flags-img/usa.png" width="25px" /><span class="fs-16 ms-2 d-none d-xl-block">English</span>
                                
                                </a>
                            </div>
                            <!-- COUNTRY -->

                            <!--Theme Light/Dark -->
                            <div class="d-flex">
                                <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                    <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                    <span class="light-layout"><i class="fe fe-sun"></i></span>
                                </a>
                            </div><?php /**PATH D:\Software\laravel\stuPort\resources\views//pages/menubar.blade.php ENDPATH**/ ?>