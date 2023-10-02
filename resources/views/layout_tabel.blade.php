@extends('app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h3>Data Suhu dan Gas</h3>
            <a href="{{ route('tabel.create') }}" class="btn btn-success">Tambah Data</a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <!-- Tabel Data Suhu dan Gas -->
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Tomat</th>
                        <th scope="col">Berat</th>
                        <th scope="col">Gas</th>
                        <th scope="col">Suhu</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tabel as $data) <!-- Ganti $tabels menjadi $tabel -->
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->id_tomat }}</td>
                            <td>{{ $data->berat }}</td>
                            <td>{{ $data->gas }}</td>
                            <td>{{ $data->suhu }}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data?')" action="{{ route('tabel.destroy', $data->id_tomat) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                                <a href="{{ route('tabel.edit', $data->id_tomat) }}" class="btn btn-warning">Ubah</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
