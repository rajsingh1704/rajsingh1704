<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="icon" href="{{ asset('dist/images/logo.png') }}" />       
        <!--Plugin CSS-->
        <link href="{{ asset('dist/css/plugins.min.css') }}" rel="stylesheet">
        <!--main Css-->
        <link href="{{ asset('dist/css/main.min.css') }}" rel="stylesheet">
        <!-- Select 2 -->
        <link rel="stylesheet" href="{{ asset('dist/select2/css/select2.min.css')}}">

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.3/b-colvis-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/r-2.2.5/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.1/sl-1.3.1/datatables.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    </head>
    <body>
        <!-- header-->
        <div id="header-fix" class="header py-4 py-lg-2 fixed-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-4 col-xl-3 align-self-center">
                        <div class="site-logo">
                            <a href=""> <img src="{{ asset('../dist/images/logo.png') }}" style="height:50px" alt="" class="img-fluid" /><span style="color:#fff;font-size: 24px;margin-top: 5px;">COLLEGE TODAY</span></a>
                        </div>
                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="navbar-btn bg-transparent float-right">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
   
                   
                    <div class="col-12 col-lg-8 col-xl-9 d-none d-lg-inline-block">
                        <nav class="navbar navbar-expand-lg p-0">
                            <ul class="navbar-nav notification ml-auto d-inline-flex">


                                <li class="nav-item dropdown user-profile align-self-center">
                                    <a  class="nav-link" data-toggle="dropdown" aria-expanded="false"> 
                                        <span class="float-right pl-3 text-white"><i class="fa fa-angle-down"></i></span>
                                        <div class="media">
                                            <img src="{{ asset('/dist/images/default.png') }}" alt="" class="d-flex mr-3 img-fluid redial-rounded-circle-50" width="45" />
                                            <div class="media-body align-self-center">
                                                <p class="mb-2 text-white text-uppercase font-weight-bold">Aditya Raj Singh</p>
                                                <small class="redial-primary-light font-weight-bold text-white">Admin </small>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu border-bottom-0 rounded-0 py-0">
                                <li><a class="dropdown-item py-2" href=""><i class="fa fa-user pr-2"></i> My Profile</a></li>
                                {{-- <li><a class="dropdown-item py-2" href="#"><i class="fa fa-cog pr-2"></i> Setting</a></li> --}}
                                <li><a class="dropdown-item py-2" href=""><i class="fas fa-sign-out-alt pr-2"></i>Logout</a></li>
                            </ul>
                        </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    
      </div>
    </div>
  </div>

   <!-- Main-content Top bar-->
 <div class="redial-relative mt-80">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-2 align-self-center my-3 my-lg-0">
                <h6 class="text-uppercase redial-font-weight-700 redial-light mb-0 pl-2">Dashboard</h6>
            </div>
            <div class="col-12 col-md-4 align-self-center">
                <div class="float-sm-left float-none mb-4 mb-sm-0">
                    <ol class="breadcrumb mb-0 bg-transparent redial-light">
                        <li class="breadcrumb-item"><a href="#" class="redial-light">Home</a></li>
                        <li class="breadcrumb-item active">@yield('pageTitle')</li>
                    </ol>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main-content Top bar-->
<div class="wrapper">
    @include('../livewire/admin/include/sideBar')
    @yield('content')
</div>
        
<!-- jQuery -->



<script src="{{ asset('dist/js/plugins.min.js') }}"></script>



<script src="{{ asset('dist/js/common.js') }}"></script>



<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
{{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>


  {{-- <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script> --}}
  <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
  
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.3/b-colvis-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/r-2.2.5/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.1/sl-1.3.1/datatables.min.js"></script>

 <!-- Select 2 -->
 <script src="{{ asset('dist/select2/js/select2.full.min.js') }}"></script>
 <script type="text/javascript">
    $('.multi-select').select2();
    $('.single-select').select2();
 </script>



    </body>
</html>