
        <!-- main-content-->
      
        <div class="wrapper" id="loginData">
            <div class="w-100">
                <div class="row d-flex justify-content-center  pt-5 mt-5">
                    <div class="col-12 col-xl-4 col-lg-6 col-xs-6 col-md-8 col-sm-6">
                        <center><img src="{{ asset('storage/'.$setting->logo) }}" alt="logo" class=" mb-2"  height="110px" width="250px"> </center>
                        {{-- @if(session()->has('message'))
                        <div class="alert text-white text-center" style="background-color: rgb(226, 76, 76); font-size:15px;">
                            {{ session()->get('message') }}
                        </div>
                        @endif --}}
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif


                        <div class="card rounded-sm">
                            <div class="card-body text-center">
                                <h4 class="redial-font-weight-400 lead"  style="border-bottom: 1px solid rgb(240, 238, 238)">Admin | Sign In Here</h4>
                               
                            <div class="card-body text-center">
                                <form class="form-horizontal m-t-20" wire:submit.prevent="LoginData">
    
                                    <div class="form-group">
                                        <input type="email" value="" name="email" id="email" wire:model="email" class="form-control" placeholder="E-Mail (Ex- hello@gmail.com)" required />
                                    </div>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="form-group">
                                        <input type="password" value="" name="password" id="pass_log_id" wire:model="password" class="form-control" placeholder="password" required />
                                        <span toggle="#password-field" ><i class="fa fa-fw fa-eye fa-2x field_icon toggle-password"></i></span>
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <button type="submit" id="loginButton098" class="btn btn-primary py-2 btn-block">Login</button>

                                    <a href="{{ route('forgotPassword') }}" >Forgot Password?</a>
                                </form>
                           
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>


        
        <!-- End main-content-->
       
        {{-- @push('scripts')
              <!-- jQuery -->
              <script src="{{asset(' dist/js/plugins.min.js') }}"></script>
              <script src="{{asset(' dist/js/common.js') }}"></script>
      
        <script>
            $("body").on('click', '.toggle-password', function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $("#pass_log_id");
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
    
            });
            </script>
        @endpush --}}