@extends('layouts.app')

@section('title', 'Daftar Pasien')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
    <h1 class="text-primary fw-bold mb-0">
        <i class="fas fa-user-injured me-2"></i> Daftar Pasien
    </h1>
</div>


<div class="card shadow-sm border-0">
    <div class="card-body p-4">

        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('pasien.create') }}" class="btn btn-success shadow-sm">
                <i class="fas fa-plus me-1"></i> Tambah Pasien
            </a>
        </div>


        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>ID Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Alamat Pasien</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pasien as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['alamat'] }}</td>
                        <td>{{ $item['tanggal_lahir'] }}</td>
                        <td>{{ $item['jenis_kelamin'] }}</td>
                        <td>
                            <a href="{{ route('pasien.edit', $item['id']) }}" class="btn btn-sm btn-warning me-1">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('pasien.delete', $item['id']) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data pasien ini?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection