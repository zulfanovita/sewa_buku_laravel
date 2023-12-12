@extends('layout.master')
@section('content')
    <div class="container">
        <h4>Tambah Transaksi Peminjaman</h4>

        @if (count($errors) > 0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        
        <form method="POST" action="{{ route('peminjaman.store') }}">
        @csrf
            <div class="form-group">
                <label>Kode Peminjam</label>
                <input type="text" name="kode_transaksi" class="form-control">
                <input type="hidden" name="tgl_peminjaman" class="form-control" value="{{ date('Y-m-d') }}">
                <input type="hidden" name="tgl_pengembalian" class="form-control" value="{{ date('Y-m-d', strtotime('+15 day', strtotime(date('Y-m-d')))) }}">
            </div>
            <div class="form-group">
            <div class="col-md-12">
                <label>Nama peminjam</label>
                <select name="id_peminjam">
                    <option value="">Pilih Nama Peminjam</option>
                    @foreach ($list_data_peminjam as $key => $value)
                    <option value="{{ $key  }}">
                        {{ $value }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Judul Buku</label><br>
                <select name="id_buku">
                    <option value="">Pilih Judul Buku</option>
                    @foreach ($list_data_buku as $key => $value)
                    <option value="{{ $key  }}">
                        {{ $value }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
@endsection