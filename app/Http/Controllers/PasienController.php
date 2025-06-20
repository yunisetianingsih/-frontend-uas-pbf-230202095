<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PasienController extends Controller
{
    protected $baseUrl = 'http://localhost:8080/pasien';

    public function index()
    {
        $response = Http::get($this->baseUrl);
        $buku = $response->json();

        return view('pasien', ['pasien' => $buku]);
    }

    public function create()
    {
        return view('pasien_crud.tambah_pasien');
    }

    public function store(Request $request)
    {
        Http::post($this->baseUrl, $request->all());

        return redirect()->route('pasien.index');
    }

    public function edit($id)
    {
        $response = Http::get("{$this->baseUrl}/{$id}");
        $buku = $response->json();

        return view('pasien_crud.edit_pasien', ['pasien' => $buku]);
    }

    public function update(Request $request, $id)
    {
        Http::put("{$this->baseUrl}/{$id}", $request->all());

        return redirect()->route('pasien.index');
    }

    public function delete($id)
    {
        Http::delete("{$this->baseUrl}/{$id}");

        return redirect()->route('pasien.index');
    }
}