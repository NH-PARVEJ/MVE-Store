
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('backend/assets/images/favicon-32x32.png')}}" type="image/png" />
  <!-- Bootstrap CSS -->
  <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
	<link href="{{asset('backend/assets/css/pace.min.css')}}" rel="stylesheet" />

  <title>Onedash - Bootstrap 5 Admin Template</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">
    
       <!--start content-->
       <main class="authentication-content">
        <div class="container-fluid">
<div class="authentication-card">
<div class="card shadow rounded-0 overflow-hidden">
    <div class="row g-0">
    <div class="col-lg-6 d-flex align-items-center justify-content-center border-end">
        <img src="{{asset('backend/assets/images/error/forgot-password-frent-img.jpg')}}" class="img-fluid" alt="">
    </div>
    <div class="col-lg-6">
        <div class="card-body p-4 p-sm-5">
        <h5 class="card-title">Forgot Password?</h5>
        <p class="card-text mb-5">Enter your registered email ID to reset the password</p>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="form-body" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="row g-3">
                <div class="col-12">
                    <!-- Email Address -->
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="form-control form-control-lg radius-30" type="email" name="email" placeholder="email" :value="old('email')" required autofocus />
                </div>

                <div class="col-12">
                <div class="d-grid gap-3">
                    <button type="submit" class="btn btn-lg btn-primary radius-30">Send</button>
                    <a href="{{route('login')}}" class="btn btn-lg btn-light radius-30">Back to Login</a>
                </div>
                </div>
            </div>

            <!-- <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div> -->
        </form>
        </div>
    </div>
    </div>
</div>
</div>
</div>
 </main>
        
       <!--end page main-->

  </div>
  <!--end wrapper-->


  <!--plugins-->
  <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/pace.min.js')}}"></script>


</body>

</html>


