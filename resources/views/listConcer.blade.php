@extends('components.layouts')

@section('content')
    <section title="Daftar Konser">
        <h2 class="title-list-concer">Daftar Konser</h2>
        <div class="list-concer">
            <div class="card-concer">
                <div class="img-concer">
                    <img src="#" alt="img-concer" width="100%" height="100%">
                </div>
                <h4>Judul Konser</h4>
                <div class="card-desc">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, eius?</p>
                </div>
                <div class="button-buy">
                    <button>
                        Beli
                    </button>
                    <button>
                        Detail
                    </button>
                </div>
            </div>
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