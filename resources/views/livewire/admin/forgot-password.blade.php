<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.designstream.co.in/redial/style1/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 08:20:21 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$setting->system_name}}|Store|Reset Password</title>
        <link rel="icon" href="{{ asset('dist/images/logo.png') }}" />

        <!--Plugin CSS-->
        <link href="{{ asset('dist/css/plugins.min.css') }}" rel="stylesheet">

        <!--main Css-->
        <link href="{{ asset('dist/css/main.min.css') }}" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        
    </head>
    <body>

        <!-- main-content-->
        <div class="wrapper" id="loginData">
            <div class="w-100">
                <div class="row d-flex justify-content-center  pt-5 mt-5">
                    <div class="col-12 col-xl-4">
                        <center><img src="{{ asset('storage/'.$setting->logo) }}" alt="logo" class=" mb-2"  height="110px" width="250px"> </center>
                        <div>
                            @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                            @elseif(session()->has('fail'))
                            <div class="alert alert-danger">
                                {{ session()->get('fail') }}
                            </div>
                            @endif  
                        </div>
                        <div class="card">
                              
                            <div class="card-body text-center">
                                <h4 class="mb-0 redial-font-weight-400">Store | Reset Password</h4>
                            </div> 
                            <div class="redial-divider"></div>
                            <div class="card-body py-4 text-center">
                                <img src="dist/images/logo-v2.png" alt="" class="img-fluid mb-4">
                                <form action="{{ route('forgotPassword') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email_id" id="email_id" class="form-control" required placeholder="Enter Your registered E-mail"/>
                                    </div>
                                    <input type="submit" id="submit" value="Send Reset Link" class="btn btn-primary btn-md redial-rounded-circle-50 btn-block">
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>   
            </div>
        </div>

        <!-- End main-content-->
        
        <!-- jQuery -->
        <script src="{{asset(' dist/js/plugins.min.js') }}"></script>        
        <script src="{{asset(' dist/js/common.js') }}"></script>
        <script src="{{ asset('dist/js/form_controller.js') }}"></script>
        <script src="{{asset(' dist/js/basic.js') }}"></script>

        <script>
           
        </script>
    </body>

<!-- Mirrored from html.designstream.co.in/redial/style1/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 08:20:23 GMT -->
</html>