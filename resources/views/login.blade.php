<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="icon" href="img/Logoind.png" />
    {{-- <link rel="stylesheet" href="style/login.css"> --}}
</head>
<style>
    body {
      height: 100vh;
      background: radial-gradient(circle at top left, #076585, #22c1c3,#fff);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    
    .card {
      overflow: hidden;
      border: 0 !important;
      border-radius: 20px !important;
      box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
    }
    
    .img-left {
      width: 45%;

      background-size: cover;
    }
    
    .card-body {
      padding: 2rem;
    }
    
    .title {
      margin-bottom: 2rem;
    }
    
    .form-input {
      position: relative;
    }
    
    .form-input input {
      width: 100%;
      height: 45px;
      padding-left: 40px;
      margin-bottom: 20px;
      box-sizing: border-box;
      box-shadow: none;
      border: 1px solid #000000;
      border-radius: 50px;
      outline: none;
      background: transparent;
    }
    
    .form-input span {
      position: absolute;
      top: 10px;
      padding-left: 15px;
      color: #164a55;
    }
    
    .form-input input::placeholder {
      color: black;
      padding-left: 0px;
    }
    
    .form-input input:focus,
    .form-input input:valid {
      border: 2px solid #164a55;
    }
    
    .form-input input:focus::placeholder {
      color: #454b69;
    }
    
    .custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
      background-color: #164a55 !important;
      border: 0px;
    }
    
    .form-box a [type='submit'] {
      margin-top: 10px;
      border: none;
      cursor: pointer;
      border-radius: 50px;
      background: #164a55;
      color: #fff;
      font-size: 90%;
      font-weight: bold;
      letter-spacing: 0.1rem;
      transition: 0.5s;
      padding: 12px;
    }
    
    .form-box button[type='submit']:hover {
      background: #164a55;
    }
    
    .forget-link,
    .register-link {
      color: #000000;
      font-weight: bold;
    }
    
    .forget-link:hover,
    .register-link:hover {
      color: #000000;
      text-decoration: none;
    }
    
    
        </style>
<body>

	<!-- ============================================================ -->
	<div class="container">
     {{-- alert --}}
     @if(session()->has('succes'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
      <center>
        {{ session('succes') }}
      </center>
     
     </div>
     @endif
     {{-- end alert --}}
     {{-- alert --}}
     @if(session()->has('loginError'))
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <center>
        {{ session('loginError') }}
      </center>
     
     </div>
     @endif
     {{-- end alert --}}
      <div class="row px-3">
        <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
          <div class="img-left d-none d-md-flex" style="background-image: url(img/login.jpg)"></div>

          <div class="card-body">
            <h4 class="title text-center mt-4">WELCOME</h4>
            <form method="post" action="/login">
              @csrf

              <form class="form-box px-3">
                <div class="form-input">
                  <span><i class="fa fa-envelope-o"></i></span>
                  <input type="email" name="email" placeholder="Email Address" tabindex="10" autofocus required value="{{ old('email')}}"/>
                  @error('email')                                               
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-input">
                  <span><i class="fa fa-key"></i></span>
                  <input type="password" name="password" placeholder="Password" required />
                  @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>


                <div class="mb-3">
                 
                </div>

                <div class="mb-3">
                  <button type="submit" name="login1" class="btn btn-block btn-success text-uppercase">Login</button>
                </div>
			</form>

                <div class="text-right">
                  <a href="#" class="forget-link">  </a>
                </div>
                <hr class="my-4" />

                <div class="text-center mb-2">
                  Don't have an account?
                  <a href="/register" class="register-link"> Register here </a>
                </div>
              </form>
            </form>
          </div>
        </div>
      </div>
    </div>
	<!-- ============================================================ -->
	


</body>
</html>