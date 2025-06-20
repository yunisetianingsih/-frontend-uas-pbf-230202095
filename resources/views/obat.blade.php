@extends('layouts.app')

@section('title', 'Daftar Obat')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
    <h1 class="text-primary fw-bold mb-0">
        <i class="fas fa-capsules me-2"></i> Daftar Obat
    </h1>
</div>


<div class="card shadow-sm border-0">
    <div class="card-body p-4">

        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('obat.create') }}" class="btn btn-success shadow-sm">
                <i class="fas fa-plus me-1"></i> Tambah Obat
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>ID Obat</th>
                        <th>Nama Obat</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                        <th>Harga Obat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($obat as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['nama_obat'] }}</td>
                        <td>{{ $item['kategori'] }}</td>
                        <td>{{ $item['stok'] }}</td>
                        <td>Rp{{ number_format($item['harga'], 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('obat.edit', $item['id']) }}" class="btn btn-sm btn-warning me-1">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('obat.delete', $item['id']) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-muted">Belum ada data obat.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection