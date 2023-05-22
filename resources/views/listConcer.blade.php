@extends('components.layouts')

@section('content')
    <section title="Daftar Konser">
        <h2 class="title-list-concer">Daftar Konser</h2>
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
        <div class="pagination">
            <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
            </ul>
        </div>
    </section>
@endsection