@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow rounded-4 border-0">
            <div class="card-body text-center p-5">

                <img src="{{ asset('images/logo_rumahsakit.jpg') }}"
                    alt="Logo Dashboard"
                    class="mb-4 rounded-circle shadow border border-3"
                    style="width: 200px; height: 200px; object-fit: cover;">


                <h2 class="text-primary fw-bold mb-2">Selamat Datang di SIMRS</h2>
                <p class="text-muted fs-5">Sistem Informasi Pengelolaan Data <strong>Obat</strong> & <strong>Pasien</strong></p>




            </div>
        </div>
    </div>
</div>
@endsection