@extends('layout.main')

@section('container')
    <!-- Hero Section -->
    
    <div class="jumbotron" style="background-image: url(img/Home1.jpg)" >
      <div class="container ">
        <div class="row col-12 text-center  ">
          <h1 class="wrapper"></h1>
          <p class="judul">
            INDONESIA
          </p>
          <p class="parag mx-5">Indonesia a country that is on a horizontal line that creates incomparable natural beauty. The beauty and diversity of culture is its trademark, with a variety of cultures making Indonesia have stunning pieces of beauty in each region. fragments of heaven that fell on earth and the variety of natural beauty characterizes Indonesia. wonderfull indonesia</p>
        </div>
      </div>
    </div>
    <!-- Secondary -->
    <div class="container-fluid oi">
      <div class="container">
        <div class="row">
          <div class="col-12 my-5 text-center">
            <h1 class="secondary">INDONESIA PIECE OF HEAVEN</h1>
            
          </div>
        </div>
        <div class="row text-center">
          <div class="ind col-12 mx-2 my-4">
            <img src="img/ind.png" alt="" class="img-fluid">
            <img src="img/sammy-sing-play (1).png"  class="play-btn" onclick="playVideo('img/wi.mp4')">
            <p class="cilik">INDONESIA MAP</p>
          </div>
        </div>
        <div class="row mx-auto">
          <div class="col-5 text-center   offset-1 ">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, facere aliquam eaque perferendis itaque laudantium ea illo cumque, numquam, alias at consequatur omnis nobis quae quos non? Quod, quasi corporis Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium iusto natus totam soluta quam ea quod cum harum autem modi, provident fugiat exercitationem consequuntur explicabo doloremque dignissimos, laudantium nulla! Non!.</p>

          </div>
          <div class="col-5 text-center">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quos tempora, deleniti a dolorum enim beatae, similique commodi quam rerum illum laborum? Dicta ex exercitationem maxime iste quo sunt. Enim? Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, dolores? Soluta minima itaque consequuntur. Voluptatibus optio vel molestiae! Facere blanditiis eos ut beatae tempora maxime et rerum veritatis eum itaque!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid OIOI">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center my-5">
            <h1> RECOMENDATION</h1>
          </div>
        </div>
      </div>
      <div class="row mx-4 my-5 ">
        <div class="col-3">
          <div class="card">
            <img src="img/bbb.jpg" class="img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bromo</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="img/Borobudur.jpg" class="img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">Borobudur</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="img/Rajaampat.jpg" class="img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">Raja Ampat</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="img/Toba.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Danau Toba</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
      </div>
  
      
    </div>
    <!-- Card -->
      <div class="row mx-4 my-5 mb-5 ">
        <div class="col-3 mb-5">
          <div class="card">
            <img src="img/william-kusno-tq_h8bCNhKQ-unsplash.jpg" class="img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pulau Komodo</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col-3 mb-5">
          <div class="card">
            <img src="img/bali.jpg" class="img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bali</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col-3 mb-5">
          <div class="card">
            <img src="img/uray-zulfikar-UjJS-liCzIE-unsplash.jpg" class="img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">Monas</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col-3 mb-5">
          <div class="card">
            <img src="img/prambanan.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Candi Prambanan</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
      </div>
      <div class="video-player" id="videoPlayer">
        <video width="100%" controls autoplay id="myvideo"> <source src="img/pexels-taryn-elliott-7108968.mp4" type="Video/mp4"></video>
        <img src="img/abstract-890.png" class="close-btn"  onclick="stopVideo()">
    </div>

<script>
var videoPlayer =document.getElementById("videoPlayer");
var myvideo =document.getElementById("myvideo");
function stopVideo(){
    videoPlayer.style.display ='none';
}
function playVideo(file){
    myvideo.src = file;
    videoPlayer.style.display ='block';
}
</script>
@endsection