<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ObatController extends Controller
{
    protected $baseUrl = 'http://localhost:8080/obat';

    public function index()
    {
        $response = Http::get($this->baseUrl);
        $buku = $response->json();

        return view('obat', ['obat' => $buku]);
    }

    public function create()
    {
        return view('obat_crud.tambah_obat');
    }

    public function store(Request $request)
    {
        Http::post($this->baseUrl, $request->all());

        return redirect()->route('obat.index');
    }

    public function edit($id)
    {
        $response = Http::get("{$this->baseUrl}/{$id}");
        $buku = $response->json();

        return view('obat_crud.edit_obat', ['obat' => $buku]);
    }

    public function update(Request $request, $id)
    {
        Http::put("{$this->baseUrl}/{$id}", $request->all());

        return redirect()->route('obat.index');
    }

    public function delete($id)
    {
        Http::delete("{$this->baseUrl}/{$id}");

        return redirect()->route('obat.index');
    }
}