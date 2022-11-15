<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Wonderfull Indonesia</title>
     <!-- Font Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />
  <!-- CSS -->
  <link rel="stylesheet" href="style/JawaTimur.css" />
  <!--Logo icon  -->
  <link rel="icon" href="img/Logoind.png" />
  <body>
  </head>
  <body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light nav-color position-fixed w-100 ">
      <div class="container">
        <a class="navbar-brand" href="/"> 
        Indonesia       </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  

            @auth
            <div class="orang3"  id="navbarNavDarkDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link " href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Hai, {{ auth()->user()->name }} 
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="/userpage">userpage</a></li>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
          
                  </ul>
                </li>
              </ul>
            </div>


            @else

            <a href="/login" class="orang"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg></a>
            @endauth
          </div>
        </div>
      </div>
    </nav>
       <!-- START FORM -->
       <form method="post" action="{{ route('mahasiswa.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="container " style="padding-top:7%;">
            <h3>Tambah Data Perjalanan</h3>
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="mb-3 row">
                    <label for="nim" class="col-sm-2 col-form-label">Destinasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='destinasi' id="destinasi">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Tanggal Berangkat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='tanggal' id="tanggal">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jurusan" class="col-sm-2 col-form-label">Budget</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='budget' id="budget">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name='gambar' id="gambar" accept="image/" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])"> <div class="mt-3 mx-4"><img src="" id="output" width="300"></div>
                    @error('gambar')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                      </div>
                     
                </div>
                <div class="mb-3 row">
                    <label for="jurusan" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SUBMIT</button></div>
                </div>
        </form>
            </div>
        </div>
        <!-- AKHIR FORM -->
      