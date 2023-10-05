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
                    <input type="text" class="form-control" id="typehead" placeholder="Search">
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
                                        <input type="text" name="search" class="form-control" placeholder="search">
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
                            </div>
                            <!-- Theme-Layout -->

                            <div class="dropdown  d-flex shopping-cart">
                                <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                                    <i class="fe fe-shopping-cart"></i><span class="badge bg-secondary header-badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading border-bottom">
                                         <div class="d-flex">
                                            <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark"> My Shopping Cart</h6>
                                            <div class="ms-auto">
                                                <span class="badge bg-danger-transparent header-badge text-danger fs-14">Hurry Up!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-dropdown-list message-menu">
                                        <div class="dropdown-item d-flex p-4">
                                            <a href="cart.html" class="open-file"></a>
                                            <span
                                                class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                data-bs-image-src="assets/images/products/3.jpg"></span>
                                            <div class="wd-50p">
                                                <h5 class="mb-1">Flower Pot for Home Decor</h5>
                                                <span>Status: <span class="text-success">In Stock</span></span>
                                                <p class="fs-13 text-muted mb-0">Quantity: 01</p>
                                            </div>
                                            <div class="ms-auto text-end d-flex fs-16">
                                                <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                    $438
                                                </span>
                                                <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                    <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown-item d-flex p-4">
                                            <a href="cart.html" class="open-file"></a>
                                            <span
                                                class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                data-bs-image-src="assets/images/products/5.jpg"></span>
                                            <div class="wd-50p">
                                                <h5 class="mb-1">Black Digital Camera</h5>
                                                <span>Status: <span class="text-danger">Out Stock</span></span>
                                                <p class="fs-13 text-muted mb-0">Quantity: 06</p>
                                            </div>
                                            <div class="ms-auto text-end d-flex">
                                                <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                    $867
                                                </span>
                                                <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                    <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown-item d-flex p-4">
                                            <a href="cart.html" class="open-file"></a>
                                            <span
                                                class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                data-bs-image-src="assets/images/products/7.jpg"></span>
                                            <div class="wd-50p">
                                                <h5 class="mb-1">Stylish Rockerz 255 Ear Pods</h5>
                                                <span>Status: <span class="text-success">In Stock</span></span>
                                                <p class="fs-13 text-muted mb-0">Quantity: 05</p>
                                            </div>
                                            <div class="ms-auto text-end d-flex">
                                                <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                    $323
                                                </span>
                                                <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                    <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown-item d-flex p-4">
                                            <a href="cart.html" class="open-file"></a>
                                            <span
                                                class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                data-bs-image-src="assets/images/products/1.jpg"></span>
                                            <div class="wd-50p">
                                                <h5 class="mb-1">Women Party Wear Dress</h5>
                                                <span>Status: <span class="text-success">In Stock</span></span>
                                                <p class="fs-13 text-muted mb-0">Quantity: 05</p>
                                            </div>
                                            <div class="ms-auto text-end d-flex">
                                                <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                    $867
                                                </span>
                                                <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                    <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown-item d-flex p-4">
                                            <a href="cart.html" class="open-file"></a>
                                            <span
                                                class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                data-bs-image-src="assets/images/products/2.jpg"></span>
                                            <div class="wd-50p">
                                                <h5 class="mb-1">Running Shoes for men</h5>
                                                 <span>Status: <span class="text-success">In Stock</span></span>
                                                <p class="fs-13 text-muted mb-0">Quantity: 05</p>
                                            </div>
                                            <div class="ms-auto text-end d-flex">
                                                <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                    $456
                                                </span>
                                                <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                    <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <div class="dropdown-footer">
                                        <a class="btn btn-primary btn-pill w-sm btn-sm py-2" href="checkout.html"><i class="fe fe-check-circle"></i> Checkout</a>
                                        <span class="float-end p-2 fs-17 fw-semibold">Total: $6789</span>
                                    </div>
                                </div>
                            </div>
                            <!-- CART -->

                                <div class="dropdown d-flex">
                                     <a class="nav-link icon full-screen-link nav-link-bg">
                                        <i class="fe fe-minimize fullscreen-button"></i>
                                    </a>
                                </div>
                                <!-- FULL-SCREEN -->
                                <div class="dropdown  d-flex notifications">
                                    <a class="nav-link icon" data-bs-toggle="dropdown"><i
                                            class="fe fe-bell"></i><span class=" pulse"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <div class="drop-heading border-bottom">
                                            <div class="d-flex">
                                                <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications</h6>
                                            </div>
                                        </div>
                                        <div class="notifications-menu">
                                            <a class="dropdown-item d-flex" href="notify-list.html">
                                                <div class="me-3 notifyimg  bg-primary brround box-shadow-primary">
                                                    <i class="fe fe-mail"></i>
                                                </div>
                                                <div class="mt-1 wd-80p">
                                                    <h5 class="notification-label mb-1">New Application received</h5>
                                                    <span class="notification-subtext">3 days ago</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item d-flex" href="notify-list.html">
                                                <div class="me-3 notifyimg  bg-secondary brround box-shadow-secondary">
                                                    <i class="fe fe-check-circle"></i>
                                                </div>
                                                <div class="mt-1 wd-80p">
                                                    <h5 class="notification-label mb-1">Project has been
                                                        approved</h5>
                                                    <span class="notification-subtext">2 hours ago</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item d-flex" href="notify-list.html">
                                                <div class="me-3 notifyimg  bg-success brround box-shadow-success">
                                                    <i class="fe fe-shopping-cart"></i>
                                                </div>
                                                <div class="mt-1 wd-80p">
                                                    <h5 class="notification-label mb-1">Your Product Delivered
                                                    </h5>
                                                    <span class="notification-subtext">30 min ago</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item d-flex" href="notify-list.html">
                                                <div class="me-3 notifyimg bg-pink brround box-shadow-pink">
                                                    <i class="fe fe-user-plus"></i>
                                                </div>
                                                <div class="mt-1 wd-80p">
                                                    <h5 class="notification-label mb-1">Friend Requests</h5>
                                                    <span class="notification-subtext">1 day ago</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dropdown-divider m-0"></div>
                                            <a href="notify-list.html" class="dropdown-item text-center p-3 text-muted">View all Notification</a>
                                        </div>
                                    </div>
                                    <!-- NOTIFICATIONS -->
                                    <div class="dropdown  d-flex message">
                                        <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                                            <i class="fe fe-message-square"></i><span class="pulse-danger"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <div class="drop-heading border-bottom">
                                                <div class="d-flex">
                                                    <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">You have 5 Messages</h6>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0)" class="text-muted p-0 fs-12">make all unread</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-menu message-menu-scroll">
                                                <a class="dropdown-item d-flex" href="chat.html">
                                                    <span
                                                        class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                        data-bs-image-src="assets/images/users/1.jpg"></span>
                                                    <div class="wd-90p">
                                                        <div class="d-flex">
                                                            <h5 class="mb-1">Peter Theil</h5>
                                                            <small class="text-muted ms-auto text-end">
                                                                6:45 am
                                                            </small>
                                                        </div>
                                                        <span>Commented on file Guest list....</span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item d-flex" href="chat.html">
                                                    <span
                                                        class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                        data-bs-image-src="assets/images/users/15.jpg"></span>
                                                    <div class="wd-90p">
                                                        <div class="d-flex">
                                                            <h5 class="mb-1">Abagael Luth</h5>
                                                            <small class="text-muted ms-auto text-end">
                                                                10:35 am
                                                            </small>
                                                        </div>
                                                        <span>New Meetup Started......</span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item d-flex" href="chat.html">
                                                    <span
                                                        class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                        data-bs-image-src="assets/images/users/12.jpg"></span>
                                                    <div class="wd-90p">
                                                        <div class="d-flex">
                                                            <h5 class="mb-1">Brizid Dawson</h5>
                                                            <small class="text-muted ms-auto text-end">
                                                                2:17 pm
                                                            </small>
                                                        </div>
                                                        <span>Brizid is in the Warehouse...</span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item d-flex" href="chat.html">
                                                    <span
                                                        class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                        data-bs-image-src="assets/images/users/4.jpg"></span>
                                                    <div class="wd-90p">
                                                        <div class="d-flex">
                                                            <h5 class="mb-1">Shannon Shaw</h5>
                                                            <small class="text-muted ms-auto text-end">
                                                                7:55 pm
                                                            </small>
                                                        </div>
                                                        <span>New Product Realease......</span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item d-flex" href="chat.html">
                                                    <span
                                                        class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                        data-bs-image-src="assets/images/users/3.jpg"></span>
                                                    <div class="wd-90p">
                                                        <div class="d-flex">
                                                            <h5 class="mb-1">Cherry Blossom</h5>
                                                            <small class="text-muted ms-auto text-end">
                                                                7:55 pm
                                                            </small>
                                                        </div>
                                                        <span>You have appointment on......</span>
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="dropdown-divider m-0"></div>
                                            <a href="javascript:void(0)" class="dropdown-item text-center p-3 text-muted">See all Messages</a>
                                        </div>
                                    </div>
                                    <!-- MESSAGE-BOX -->
                                    <div class="dropdown d-flex header-settings">
                                        <a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="sidebar-right" data-target=".sidebar-right">
                                            <i class="fe fe-align-right"></i>
                                        </a>
                                    </div>
                                    <!-- SIDE-MENU -->
                                    <div class="dropdown d-flex profile-1">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                            
                                            <img src="assets/images/users/21.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
                                            
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <div class="drop-heading">
                                                <div class="text-center">
                                                    <h5 class="text-dark mb-0 fs-14 fw-semibold">erererte</h5>
                                                    <small class="text-muted">sefer</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-divider m-0"></div>
                                            <a class="dropdown-item" href="student-profile.php">
                                                <i class="dropdown-icon fe fe-user"></i> awdwrwe
                                            </a>
                                            <a class="dropdown-item" href="student-course.php">
                                                <i class="dropdown-icon fe fe-lock"></i>egerge
                                            </a>
                                            <a class="dropdown-item" href="logout.php">
                                                <i class="dropdown-icon fe fe-alert-circle"></i> ewere
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar font-hind-siliguri">
                    <div class="side-header">
                        <a class="header-brand1" href="index.php">
                            <img width="107" height="42" src="assets/images/brand/logo-long-d.png" class="header-brand-img desktop-logo" alt="logo">
                            <img width="107" height="102" src="assets/images/brand/logo-short-d.png" class="header-brand-img toggle-logo" alt="logo">

                            <img width="107" height="102" src="assets/images/brand/logo-short.png" class="header-brand-img light-logo" alt="logo">
                            <img width="107" height="42" src="assets/images/brand/logo-long.png" class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>menu</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.php"><i
                                        class="side-menu__icon fe fe-home"></i><span
                                        class="side-menu__label">dashboard</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>personal-kit</h3>
                            </li>
                            <li>
                                <a class="side-menu__item has-link" href="page-event.php"><i class="side-menu__icon fe fe-slack"></i><span class="side-menu__label">events</span><!--<span class="badge bg-green br-5 side-badge blink-text pb-1">New</span>--></a>
                            </li>
                            <li>
                                <a class="side-menu__item has-link" href="page-note.php" ><i class="side-menu__icon fe fe-edit-3"></i><span class="side-menu__label">notes</span><!--<span class="badge bg-green br-5 side-badge blink-text pb-1">New</span>--></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-hard-drive"></i><span class="side-menu__label"> routine</span><i class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										<div class="tab-menu-heading p-0 pb-2 border-0">
											<div class="tabs-menu ">
												<!-- Tabs -->
												<ul class="nav panel-tabs">
													<li><a href="#side1" class="d-flex " data-bs-toggle="tab"><i class="fe fe-monitor me-2"></i><p>Home</p></a></li>
													<li><a href="#side2" data-bs-toggle="tab" class="d-flex active"><i class="fe fe-message-square me-2"></i><p>Chat</p></a></li>
												</ul>
											</div>
										</div>
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane " id="side1">
													<ul class="sidemenu-list">
                                                        <li class="side-menu-label1"><a href="javascript:void(0)"> routine</a></li>
                                                        <li><a href="pagesl" class="slide-item"> daily-routine </a></li>
                                                        <li><a href="page-class-routine.php" class="slide-item"> class-routine </a></li>
                                                        <li><a href="page-exam-routine.php" class="slide-item"> exam-routine</a></li>
													</ul>
                                                </div>
											</div>
										</div>
									</li>
								</ul>
                            </li>
                            <li>
                                <a class="side-menu__item has-link" href="page-classroom.php" ><i class="side-menu__icon ti ti-blackboard"></i><span class="side-menu__label">classroom</span><!--<span class="badge bg-green br-5 side-badge blink-text pb-1">New</span>--></a>
                            </li>
                            <li>
                                <a class="side-menu__item has-link" href="html/chat.html" target="_blank"><i class="side-menu__icon fe fe-feather"></i><span class="side-menu__label">chat</span><!--<span class="badge bg-green br-5 side-badge blink-text pb-1">New</span>--></a>
                            </li>
                            <li>
                                <a class="side-menu__item has-link" href="page-module.php"><i class="side-menu__icon fe fe-server"></i><span class="side-menu__label">modules</span><!--<span class="badge bg-green br-5 side-badge blink-text pb-1">New</span>--></a>
                            </li>
                            <li>
                                <a class="side-menu__item has-link" href="live-meeting.php"><i class="side-menu__icon fe fe-zap"></i><span class="side-menu__label">Live Conference</span><span class="badge bg-green br-5 side-badge blink-text pb-1">Upcoming</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>study-pages</h3>
                            </li>
                            <li>
                                <a class="side-menu__item has-link" href="page-quiz.php"><i class="side-menu__icon ti ti-help-alt"></i><span class="side-menu__label">quiz-page</span><!--<span class="badge bg-green br-5 side-badge blink-text pb-1">New</span>--></a>
                            </li>
                            <li>
                                <a class="side-menu__item has-link" href="page-course.php"><i class="side-menu__icon ti ti-ruler-pencil"></i><span class="side-menu__label">course-page</span><!--<span class="badge bg-green br-5 side-badge blink-text pb-1">New</span>--></a>
                            </li>
                            <li>
                                <a class="side-menu__item has-link" href="page-tutorial.php"><i class="side-menu__icon ti ti-agenda"></i><span class="side-menu__label">tutorial-page</span><!--<span class="badge bg-green br-5 side-badge blink-text pb-1">New</span>--></a>
                            </li>
                            <li>
                                <a class="side-menu__item has-link" href="page-group.php"><i class="side-menu__icon icon icon-people"></i><span class="side-menu__label">community-page</span><!--<span class="badge bg-green br-5 side-badge blink-text pb-1">New</span>--></a>
                            </li>
                            <li>
                                <a class="side-menu__item has-link" href="page-book-shop.php"><i class="side-menu__icon icon icon-basket-loaded"></i><span class="side-menu__label">book-shop</span><!--<span class="badge bg-green br-5 side-badge blink-text pb-1">New</span>--></a>
                            </li>
                            <li>
                                <a class="side-menu__item has-link" href="page-history.php"><i class="side-menu__icon fe fe-clock"></i><span class="side-menu__label">world-history</span><span class="badge bg-danger br-5 side-badge blink-text pb-1">Hot</span></a>
                            </li>
                            <li>
                                <a class="side-menu__item has-link" href="page-coming-soon.php"><i class="side-menu__icon fe fe-clock"></i><span class="side-menu__label">Dictionary</span><span class="badge bg-success br-5 side-badge blink-text pb-1">New</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>Online Compiler</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-hard-drive"></i><span class="side-menu__label"> All Compiler </span><i class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										<div class="tab-menu-heading p-0 pb-2 border-0">
											<div class="tabs-menu ">
												<!-- Tabs -->
												<ul class="nav panel-tabs">
													<li><a href="#side1" class="d-flex " data-bs-toggle="tab"><i class="fe fe-monitor me-2"></i><p>Home</p></a></li>
													<li><a href="#side2" data-bs-toggle="tab" class="d-flex active"><i class="fe fe-message-square me-2"></i><p>Chat</p></a></li>
												</ul>
											</div>
										</div>
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane " id="side1">
													<ul class="sidemenu-list">
                                                        <li class="side-menu-label1"><a href="javascript:void(0)"> All Compiler</a></li>
                                                        <li><a href="html-compiler.php" class="slide-item"> HTML </a></li>
                                                        <li><a href="page-class-routine.php" class="slide-item"> JavaScript </a></li>
                                                        <li><a href="page-exam-routine.php" class="slide-item"> PHP</a></li>
                                                        <li><a href="page-exam-routine.php" class="slide-item"> Python</a></li>
                                                        <li><a href="page-exam-routine.php" class="slide-item"> SQL </a></li>
													</ul>
                                                </div>
											</div>
										</div>
									</li>
								</ul>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" /></svg>
                        </div>
                    </div>
                </div>
            </div>
            <!--/APP-SIDEBAR--><?php /**PATH D:\Software\laravel\stuPort\resources\views/pages/menubar.blade.php ENDPATH**/ ?>