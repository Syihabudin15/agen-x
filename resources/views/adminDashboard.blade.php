@extends('components.layouts')

@section('content')
    <section title="Admin Dashboard" class="dashboard">
        <div class="find-tiket">
            <p>Cari data dengan Tiket ID :</p>
            <input placeholder="Tiket ID">
            <button>Cari</button>
        </div>
        <div class="data-tiket">
            <div class="row-data-tiket">
                <p>Tiket ID</p>
                <p>:</p>
                <p>random-1028</p>

                <p>Nama Pembeli</p>
                <p>:</p>
                <p>Random nama</p>
            </div>
        </div>
    </section>
    <section title="Daftar Pemesan" class="list-pemesan">
        <h2>Daftar Pemesan</h2>
        <div class="filter">
            <select name="filter" id="filter">
                <option value="check-in">Telah dipakai</option>
                <option value="not check-in">Belum dipakai</option>
            </select>
        </div>
        <div class="table">
            <table>
                <tr>
                    <th>Tiket ID</th>
                    <th>Nama Pembeli</th>
                    <th>Tanggal</th>
                    <th>Harga</th>
                    <th>Konser</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>ranso,-219</td>
                    <td>ranso,-219</td>
                    <td>ranso,-219</td>
                    <td>ranso,-219</td>
                    <td>ranso,-219</td>
                    <td>
                        <span>ubah</span> | <span>hapus</span>
                    </td>
                </tr>
            </table>
        </div>
    </section>
@endsection