@extends('layouts.app')

@section('title', 'Edit Obat')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
            <h2 class="text-dark fw-bold mb-0">
                <i class="fas fa-edit me-2"></i> Edit Obat
            </h2>
        </div>


        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <form action="{{ route('obat.update', $obat['id']) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Nama Obat</label>
                        <input type="text" name="nama_obat" class="form-control" value="{{ $obat['nama_obat'] }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <input type="text" name="kategori" class="form-control" value="{{ $obat['kategori'] }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Stok</label>
                        <input type="number" name="stok" class="form-control" value="{{ $obat['stok'] }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="text" name="harga" class="form-control" value="{{ $obat['harga'] }}" required>
                    </div>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif


                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('obat.index') }}" class="btn btn-secondary">
                            ← Kembali ke daftar
                        </a>
                        <button type="submit" class="btn btn-warning">
                            <i class="fas fa-save me-1"></i> Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection