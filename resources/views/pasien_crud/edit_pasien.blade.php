@extends('layouts.app')

@section('title', 'Edit Pasien')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
            <h2 class="text-dark fw-bold mb-0">
                <i class="fas fa-user-edit me-2"></i> Edit Pasien
            </h2>
        </div>


        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <form action="{{ route('pasien.update', $pasien['id']) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Nama Pasien</label>
                        <input type="text" name="nama" class="form-control" value="{{ $pasien['nama'] }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat Pasien</label>
                        <textarea name="alamat" class="form-control" required>{{ $pasien['alamat'] }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="{{ $pasien['tanggal_lahir'] }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin" required>
                            <option value="L" {{ $pasien['jenis_kelamin'] == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                            <option value="P" {{ $pasien['jenis_kelamin'] == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
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
                        <a href="{{ route('pasien.index') }}" class="btn btn-secondary">
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