@extends('components.layouts')

@section('content')
    <section title="main web" class="main-top">
        <div class="main-left">
            <h1>Agen X</h1>
            <p>Agen X adalah Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, tempore nihil consectetur maxime fuga at eum nostrum ut! Et, vero.</p>
            <div class="main-button">
                <button>Lihat Daftar Konser</button>
            </div>
        </div>
        <div class="main-right">
            <img src="#" alt="logo-img" width="100%" height="100%">
        </div>
    </section>
    <section title="daftar konser terbaru" class="list-concer-wrapper">
        <h3>Daftar Konser Terbaru</h3>
        <div class="list-concer">
            @foreach ($data as $item)
                <div class="card-concer">
                    <div class="img-concer">
                        <img src="#" alt="img-concer" width="100%" height="100%">
                    </div>
                    <h4>{{$item->name}}</h4>
                    <div class="card-desc">
                        <p>{{$item->desc}}</p>
                    </div>
                    <div class="button-buy">
                        <button onclick="buyTiket({{$item}})">
                            Beli
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="see-all-link">
            <a href="/daftar-konser">Lihat semua</a>
        </div>
    </section>
@endsection