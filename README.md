# 📘 FRONTEND UAS - PBF SISTEM RUMAHSAKIT

Proyek ini adalah aplikasi **Frontend Laravel** yang terhubung ke REST API Backend CodeIgniter 4, untuk mengelola data **Pasien** dan **Obat** dalam sistem informasi rumah sakit.

---

## ✅ 1. Melakukan Clone & Jalankan Backend 

- Melakukan Clone repository backend 
- Import file SQL ke database (menggunakan phpMyAdmin).
- Membuat database dengan nama: `db_rumahsakit_230202095`
- Menyesuaikan konfigurasi `.env` di folder backend agar sesuai dengan nama database.
- Menjalankan backend CodeIgniter 4:

Perintah  Menjalankan Ci
```bash
php spark serve
```

- Cek endpoint dengan Postman:
  - GET http://localhost:8080/obat
  - GET http://localhost:8080/pasien

---

## ✅ 2. Membuat Group Collection di Postman

- Buat dua collection:
  - `uas_obat`
  - `uas_pasien`

Setiap collection memuat 4 request:
- GET (List data)
- POST (Tambah data)
- PUT (Ubah data)
- DELETE (Hapus data)

Contoh Obat:
```
GET     http://localhost:8080/obat
POST    http://localhost:8080/obat
PUT     http://localhost:8080/obat/{id}
DELETE  http://localhost:8080/obat/{id}
```
Contoh Pasien:
```
GET     http://localhost:8080/pasien
POST    http://localhost:8080/pasien
PUT     http://localhost:8080/pasien/{id}
DELETE  http://localhost:8080/pasien/{id}
```

---

## ✅ 3. Membuat Project Laravel

Perintah yang dijalankan
```bash
composer create-project laravel/laravel frontend-uas-230202095
cd frontend-uas-230202095
php artisan serve
```

---

## ✅ 4. Menlakukan Ambil Data dari Backend

Menggunakan `Http::get()` di controller Laravel untuk mengambil data dari backend:

Contoh controller:
```php
use Illuminate\Support\Facades\Http;

public function index()
{
    $response = Http::get('http://localhost:8080/obat');
    $obat = $response->json();
    return view('obat', compact('obat'));
}
```

---

## ✅ 5. Membuat Buat CRUD Laravel 

Implementasikan fitur:
- **Create** (tambah data)
- **Read** (lihat data)
- **Update** (ubah data)
- **Delete** (hapus data)

Untuk:
- Tabel `obat`
- Tabel `pasien`


---

## 🚀 Cara Menjalankan Project Laravel

1. Pastikan sudah install PHP dan Composer.
2. Jalankan perintah:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```
3. Jalankan backend di port 8080.
4. Akses frontend di http://localhost:8000

---

## 📌 Catatan
- Pastikan backend aktif sebelum frontend mengakses data.
- Menggunakan Postman untuk menguji semua endpoint.

---

📄 Author: **Yuni Setianingsih**  
NIM: 230202095
