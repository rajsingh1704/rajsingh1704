<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$setting->system_name}}|Reset Password</title>
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
</head>
<body>
    <div class="container-fluid bg-light">
        <div class="row d-flex justify-content-center align-items-center m-0" style="height: 100vh;">
          <div class="col-md-4 mx-auto  ">
            <center><img src="{{ asset('storage/'.$setting->logo) }}" alt="logo" class=" mb-2"  height="110px" width="250px"> </center>
              <div class="card shadow-sm">
                  <h5 class="card-header bg-primary rounded text-white text-center">Reset Password</h5>
            <form action="{{ route('resetPassword', ['key'=>$data->reset_token]) }}" method="POST" id="resetPassword" autocomplete="off" >
                @csrf
                <input type="hidden" name="password_reset_token" value="{{ $data->reset_token }}">
                <input type="hidden" name="email" value="{{ $data->email }}">
                <div class="card-body">
                    <div class="col-12">
                        <label for="password">New Password:</label>
                    <div class="input-group mb-3">
                    <input name="password" type="password" value="" class="form-control" id="password" placeholder="New Password" value="{{ old('password') }}" autofocus />
                  </div>
                  @error('password')
                    <span class="text-danger small">{{ $message }}</span>
                  @enderror
                    </div>
                    
                <div class="col-12">
                    <label for="password">Confirm Password:</label>
                  <div class="input-group mb-3">
                    <input name="password_confirm" type="password" value="" class="form-control" id="password_confirm" placeholder="Confirm password" value="{{ old('password_confirm') }}" />
                  </div>
                  @error('password_confirm')
                  <span class="text-danger small">{{ $message }}</span>
                @enderror
                </div>
                <div class="col-12">
                  <input class="btn btn-primary rounded" id="submit" type="submit" value="Reset">
                </div>
                </div>
            </form>
            <div>
              <ul class="fw-light text-primary">
                <span class="text-danger font-weight-bold">Rules</span>
                <li>must be at least 8 characters in length.</li>
                <li>must contain at least one lowercase letter.</li>
                <li>must contain at least one uppercase letter.</li>
                <li>must contain at least one digit.</li>
                <li>must contain a special character.</li>
              </ul>
            </div>
        </div>
          </div>
        </div>
      </div>
</body>
</html>