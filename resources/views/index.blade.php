@extends('layout/main')

@section('title', 'Home')


@section('container')

    <!-- body -->
    <div class="container">
        <div class="row">
            <div class="col-12 mb-1">
                <h1>List Anime</h1>
            </div>
        </div>
        <div class="row">
            <p>
                Selamat datang di website List Anime, berikut merupakan list beberapa tempat terindah yang ada di dalam dunia anime
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-8">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset('image/01.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Yggdrasil</h5>
                          <p>Pohon kehidupan, pohon raksasa yang sangat besar dan keramat yang menghubungkan sembilan dunia</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('image/02.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Kastil Osaka</h5>
                          <p>Istana Osaka berada di ujung paling sebelah utara daerah Uemachi, menempati lokasi tanah yang paling tinggi dibandingkan dengan wilayah</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('image/03.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Tiphares (Zalem atau Salem) </h5>
                          <p>Kota yang mengapung, ditopang dari angkasa dalam konstruksi pilar dan dijangkarkan ke tanah menggunakan kabel raksasa, yang juga berfungsi sebagai tabung suplai. </p>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </div>
    </div>

@endsection
