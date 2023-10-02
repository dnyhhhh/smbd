@extends('app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h3>Tambah Data Suhu dan Gas</h3>
            <a href="{{ route('layout-table') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <!-- Formulir untuk menambahkan data baru -->
            <form method="POST" action="{{ route('tabel.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="id_tomat" class="form-label">ID Tomat</label>
                    <input type="text" class="form-control" id="id_tomat" name="id_tomat" required>
                </div>
                <div class="mb-3">
                    <label for="berat" class="form-label">Berat</label>
                    <input type="text" class="form-control" id="berat" name="berat" required>
                </div>
                <div class="mb-3">
                    <label for="gas" class="form-label">Gas</label>
                    <input type="text" class="form-control" id="gas" name="gas" required>
                </div>
                <div class="mb-3">
                    <label for="suhu" class="form-label">Suhu</label>
                    <input type="text" class="form-control" id="suhu" name="suhu" required>
                </div>
                <button type="submit" class="btn btn-success">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection
