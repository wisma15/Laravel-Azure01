@extends('layout/main')

@section('title', 'About')


@section('container')

    <!-- body -->
    <div class="container">
        <div class="row">
            <div class="col-12 mb-1">
                <h1>About Me</h1>
            </div>
        </div>
        <div class="row">
            <div class="media">
                <img src="{{asset('image/foto1.png')}}" class="img-thumbnail mr-3 w-25" alt="Responsive image">
                <div class="media-body">
                    <h5 class="mt-0">Wisma Yoga</h5>
                    Seorang mahasiswa semester 4 berasal dari Singaraja, Bali. Dan juga seorang penikmat
                    animasi jepang terutama yang memiliki cerita dan animasi yang unik. 
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>

@endsection
