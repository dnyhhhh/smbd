@extends('app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h3>Edit Data Tabel</h3>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <!-- Form Edit Data Tabel -->
            <form method="POST" action="{{ route('tabel.update', $tabel->id_tomat) }}">
                @csrf
                @method('PUT')

                <!-- Form Fields -->
                <div class="form-group">
                    <label for="id_tomat">ID Tomat</label>
                    <input type="text" class="form-control" id="id_tomat" name="id_tomat" value="{{ $tabel->id_tomat }}">
                </div>
                <div class="form-group">
                    <label for="berat">Berat</label>
                    <input type="text" class="form-control" id="berat" name="berat" value="{{ $tabel->berat }}">
                </div>
                <div class="form-group">
                    <label for="gas">Gas</label>
                    <input type="text" class="form-control" id="gas" name="gas" value="{{ $tabel->gas }}">
                </div>
                <div class="form-group">
                    <label for="suhu">Suhu</label>
                    <input type="text" class="form-control" id="suhu" name="suhu" value="{{ $tabel->suhu }}">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
