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
        <a class="navbar-brand" href="/"> <img src="img/Logoind.png" alt="" width="30" height="24">
        Indonesia       </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav ">
            <li class="nav-item mx-3 ms-auto ">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Homepage</a>
            </li>
            <li class="nav-item mx-3 ">
              <a class="nav-link" href="{{ route('logbook') }}">Logbook</a>
            </li>
            <li class="nav-item mx-3 ">
              <a class="nav-link" href="{{ route('ourteam') }}">Contact</a>
            </li>
          
          </ul>
          <div>

            @auth
            <div class="orang3"  id="navbarNavDarkDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <!-- End Navbar -->
    <!-- Start -->
    <!-- Finish -->
    <!-- fotter -->

  
    <!-- Gambar -->
    
    <div class="gambar">
        <div class="container ">
          <div class="row col-12 text-center  ">

           
          </div>
        </div>
      </div>
    
      <!-- Tabel -->
      <center>
        <div class="pb-3">
          <a href='' class="btn btn-primary">+ Tambah Data</a>
        </div>
  
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-3">Destinasi</th>
                    <th class="col-md-4">Tanggal Berangkat</th>
                    <th class="col-md-2">Budget</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1001</td>
                    <td>Ani</td>
                    <td>Ilmu Komputer</td>
                    <td>
                        <a href='' class="btn btn-warning btn-sm">Edit</a>
                        <a href='' class="btn btn-danger btn-sm">Del</a>
                    </td>
                </tr>
            </tbody>
        </table>
       
  </div>
      
      </center>
     
