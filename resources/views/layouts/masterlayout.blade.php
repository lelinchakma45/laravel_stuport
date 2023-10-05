@include('pages.head-main')

<head>
    @include('pages.head-meta')

    <!-- TITLE -->
    <title>StuPort – Students Activity & Social Platform </title>
    @include('pages.head-style')
 </head>

<body class="app sidebar-mini ltr light-mode">

    {{--@include('pages.loader')--}}

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            @include('pages.menubar')

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


            @include('pages.lang-model')
            <!-- Country-selector modal-->
            @include('pages.footer')
        </div>
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
    @include('pages.javascript')
 

</body>

</html>