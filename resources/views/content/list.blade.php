@extends('layout/main')

@section('title', 'list')


@section('container')

    <!-- body -->
    <div class="container">
        <div class="row">
            <div class="col-12 mb-1">
                <h1>Anime Terbaik Tahun 2021</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="card col-3 ml-3 mr-3 mt-3 mb-3 " style="width: 18rem;">
                <img src="{{ asset('image/foto1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><b>Dr. STONE: STONE WARS</b></p>
                    <p class="card-text">Season kedua dari petualangan Senku, sang scientist, bersama teman-temannya ini
                        akan yang berusaha mengembalikan dunia kembali seperti semula setelah kejadian aneh yang membuat
                        seluruh manusia di muka bumi menjadi batu.</p>
                </div>
            </div>
            <div class="card col-3 ml-3 mr-3 mt-3 mb-3 " style="width: 18rem;">
                <img src="{{ asset('image/foto1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><b>Yakusoku no Neverland season 2</b></p>
                    <p class="card-text">Setelah akhirnya berhasil kabur dari tempat dia dibesarkan, Emma dan kawan-kawan
                        dihadapkan dengan tantangan baru yaitu bertahan hidup di dunia yang sama sekali asing dengan mereka.
                    </p>
                </div>
            </div>
            <div class="card col-3 ml-3 mr-3 mt-3 mb-3 " style="width: 18rem;">
                <img src="{{ asset('image/foto1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><b>Go-toubun no Hanayome</b> </p>
                    <p class="card-text">Season kedua dari Waifu War antara lima saudari kembar untuk memperebutkan Futaro
                        Uesugi yang merupakan guru privat mereka. Setelah season pertama anime ini tayang, semakin banyak
                        yang dibuat penasaran siapakah yang akhirnya akan dipinang oleh Futaro Uesugi dan saling berdebat
                        siapakah yang terbaik dari kelima saudari tersebut.</p>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
