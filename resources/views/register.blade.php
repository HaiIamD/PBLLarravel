<!DOCTYPE html>
<html>
<head>
    <title>Register Form</title>
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
      background: radial-gradient(circle at top left, #fff, #22c1c3,#076585);
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
      <div class="row px-3">
        <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
          <div class="img-left d-none d-md-flex" style="background-image: url(img/Katakata.jpg)"></div>

          <div class="card-body">
            <h2 class="title text-center mt-4">REGISTRATION</h2>
            <form method="post" action="/register">
              @csrf
              <form class="form-box px-4">
                <div class="form-input">
                  <span><i class="fa fa-user"></i></span>
                  <input type="name" name="name" class="is-invalid" placeholder="Nama" tabindex="10" required />
                  @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-input">
                  <span><i class="fa fa-user-circle-o is-in"></i></span>
                  <input type="username" name="username" placeholder="Username" required />
                  @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-input">
                  <span><i class="fa fa-envelope-o"></i></span>
                  <input type="email" name="email" placeholder="Email" required />
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
                  <button type="submit"  class="btn btn-block btn-success text-uppercase">SUBMIT</button>
                </div>  
                <div class="text-center mb-2">
                  have an account?  
                  <a href="/login" class="register-link"> Login here</a>
                </div>
		
            </form>
          </div>
        </div>
      </div>
    </div>
	<!-- ============================================================ -->
	


</body>
</html>