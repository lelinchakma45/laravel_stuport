<?php echo $__env->make('pages.head-main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<head>
    <?php echo $__env->make('pages.head-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- TITLE -->
    <title>StuPort – Students Activity & Social Platform </title>
    <?php echo $__env->make('pages.head-style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 </head>

<body class="app sidebar-mini ltr light-mode">

    

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <?php echo $__env->make('pages.menubar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Empty</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Empty</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <!-- Row -->
                        <div class="row ">
                            <div class="col-md-12">
                                
                            </div>
                                
                        </div>
                        <!-- /Row -->
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!--app-content closed-->


            <?php echo $__env->make('pages.lang-model', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Country-selector modal-->
            <?php echo $__env->make('pages.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
    <?php echo $__env->make('pages.javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 

</body>

</html><?php /**PATH D:\Software\laravel\stuPort\resources\views/layouts/masterlayout.blade.php ENDPATH**/ ?>