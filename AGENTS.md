# MASTER PROMPT — Laravel Route Refactoring & Profile Role Routing

## 1. Peran AI Agent

Bertindaklah sebagai Senior Laravel Developer yang berpengalaman dalam Laravel, Blade Template, Routing, Middleware, Authentication, dan Role-Based Access Control (RBAC).

Tugas utama adalah melakukan perbaikan terbatas pada sistem routing link dan navigasi halaman profil di proyek Laravel yang sudah ada.

Kerjakan langsung pada source code proyek, lakukan pemeriksaan menyeluruh, dan pertahankan seluruh struktur serta perilaku aplikasi yang sudah berjalan.

## 2. Tujuan Utama

Ada dua tugas yang harus diselesaikan:

### A. Mengubah seluruh link hardcoded menjadi named route Laravel

Cari seluruh atribut `href` pada file Blade yang menggunakan URL internal secara hardcoded, misalnya:

```blade
<a href="/dashboard">Dashboard</a>
<a href="/profile">Profile</a>
<a href="/admin/users">Users</a>
<a href="/admin/settings">Settings</a>
```

Ubah menjadi named route berdasarkan definisi yang benar-benar tersedia di `routes/web.php`.

Contoh, jika `web.php` berisi:

```php
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/profile', [ProfileController::class, 'index'])
    ->name('profile');

Route::get('/admin/users', [UserController::class, 'index'])
    ->name('admin.users.index');
```

Maka hasilnya:

```blade
<a href="{{ route('dashboard') }}">Dashboard</a>
<a href="{{ route('profile') }}">Profile</a>
<a href="{{ route('admin.users.index') }}">Users</a>
```

**Aturan wajib:**
- Gunakan nama route yang benar-benar terdaftar di proyek.
- Jangan menebak atau membuat nama route sendiri.
- Jangan mengubah URL menjadi `route('nama-route')` sebelum memastikan named route tersebut tersedia.
- Jika route belum memiliki nama, laporkan kepada pengguna dan jangan mengubah definisi route secara otomatis.
- Jangan mengubah teks link, class CSS, atribut HTML, ikon, struktur elemen, kondisi Blade, atau styling.
- Pertahankan parameter route jika diperlukan.
- Pertahankan seluruh query parameter, fragment URL, dan perilaku navigasi yang sudah ada.
- Jangan mengubah link eksternal, seperti `https://example.com`, `mailto:`, `tel:`, `javascript:`, maupun link anchor seperti `#section`.
- Jangan mengubah URL asset seperti gambar, CSS, JavaScript, favicon, atau file unduhan.
- Jangan mengubah URL yang memang merupakan endpoint eksternal atau endpoint API yang tidak menggunakan named route untuk navigasi halaman.
- Jangan mengganti URL yang digunakan oleh JavaScript, formulir, atau mekanisme lain apabila hal tersebut berada di luar cakupan perubahan atribut `href`.

### B. Memperbaiki navigasi halaman profil berdasarkan role

Periksa sistem profil yang sudah tersedia, termasuk:
- Tombol atau menu Profile.
- Dropdown profil pengguna.
- Sidebar dan navbar.
- Route profil dalam `routes/web.php`.
- Controller yang menangani halaman profil.
- Mekanisme role pengguna yang sudah digunakan oleh aplikasi.

Pastikan navigasi profil mengarahkan pengguna ke halaman yang sesuai dengan role-nya.

Aturan navigasi:

| Role pengguna | Tujuan navigasi |
|---|---|
| `admin` | Halaman profil khusus admin yang sudah tersedia di proyek |
| `user` | Halaman profil khusus user yang sudah tersedia di proyek |

Gunakan route yang benar-benar terdaftar pada `web.php`, bukan nama route berdasarkan asumsi.

Contoh ilustrasi apabila proyek memiliki dua named route:

```php
Route::get('/admin/profile', [AdminProfileController::class, 'index'])
    ->name('admin.profile');

Route::get('/user/profile', [UserProfileController::class, 'index'])
    ->name('user.profile');
```

Maka navigasi profil dapat disesuaikan seperti berikut:

```blade
@if (auth()->user()->role === 'admin')
    <a href="{{ route('admin.profile') }}">Profile</a>
@elseif (auth()->user()->role === 'user')
    <a href="{{ route('user.profile') }}">Profile</a>
@endif
```

Kode di atas hanya contoh. Gunakan controller, route, nama role, dan struktur yang sudah ada pada proyek.

**Aturan wajib sistem profil:**
- Role `admin` diarahkan ke halaman profil admin.
- Role `user` diarahkan ke halaman profil user.
- Jangan mengubah role yang sudah digunakan oleh sistem.
- Jangan mengasumsikan bahwa nama field role adalah `role` sebelum memeriksa model dan kode autentikasi.
- Jangan mengubah sistem login, registrasi, session, autentikasi, middleware, atau database.
- Jangan mengubah izin akses halaman atau menambahkan fitur baru.
- Jika kedua halaman profil belum tersedia, jangan membuat halaman atau route baru. Laporkan kondisi tersebut.
- Jika terdapat role lain, pertahankan perilaku sebelumnya dan laporkan jika penanganannya tidak jelas.
- Jangan hanya mengandalkan penyembunyian link di Blade untuk keamanan. Namun, jangan melakukan perubahan middleware atau authorization karena berada di luar cakupan tugas ini.

## 3. Batasan Perubahan — Sangat Ketat

Agent hanya diizinkan mengubah:

1. Nilai atribut `href` pada link internal yang harus menggunakan named route.
2. Logika navigasi link profil yang menentukan tujuan berdasarkan role admin atau user, termasuk kondisi Blade minimal yang diperlukan.

Agent dilarang mengubah hal-hal berikut:

- Controller, kecuali tidak ada alasan untuk menyentuhnya karena perbaikan ini seharusnya dilakukan pada navigasi.
- Model dan migration.
- Database dan struktur tabel.
- Routes dalam `routes/web.php`.
- Middleware dan konfigurasi autentikasi.
- Service, helper, event, listener, dan job.
- JavaScript, CSS, Tailwind CSS, dan komponen UI selain perubahan yang benar-benar diperlukan pada link profil.
- Teks, ikon, desain, layout, struktur halaman, dan responsive behavior.
- Nama variabel, fungsi, class, atau file.
- Dependensi Composer atau NPM.
- File konfigurasi lingkungan.
- Kode yang tidak berkaitan langsung dengan dua tugas utama.

Jangan melakukan refactoring, optimasi, formatting massal, atau perbaikan bug lain yang ditemukan selama pemeriksaan.

**Prinsip utama: perubahan sekecil mungkin, tanpa efek samping, dan hanya sesuai ruang lingkup yang ditentukan.**

## 4. Prosedur Kerja Wajib

### Tahap 1 — Audit proyek

Sebelum mengedit kode:

1. Periksa `routes/web.php`.
2. Identifikasi semua named route yang terdaftar.
3. Periksa struktur direktori `resources/views`.
4. Cari seluruh atribut `href` pada file Blade.
5. Identifikasi URL internal hardcoded dan cocokkan dengan named route yang tersedia.
6. Temukan seluruh link profil dan dropdown pengguna.
7. Periksa bagaimana role disimpan dan dibaca dalam sistem.
8. Tentukan file yang benar-benar membutuhkan perubahan.

Jangan melakukan perubahan sebelum proses pencocokan route dan role selesai.

### Tahap 2 — Buat pemetaan link

Susun pemetaan internal berikut sebelum mengedit:

| URL lama | Named route yang terdaftar | File | Status |
|---|---|---|---|
| `/dashboard` | `dashboard` | File Blade terkait | Siap diubah |
| `/profile` | Sesuai hasil audit | File Blade terkait | Perlu verifikasi |
| `/admin/users` | Sesuai hasil audit | File Blade terkait | Perlu verifikasi |

Tabel tersebut merupakan contoh format, bukan daftar route yang harus diasumsikan tersedia.

Jangan mengubah URL jika nama route atau pemetaan tujuannya belum dapat dipastikan.

### Tahap 3 — Terapkan perubahan minimal

1. Ubah hanya atribut `href` yang sesuai dengan ruang lingkup.
2. Gunakan helper `route()` dengan nama route yang sudah terdaftar.
3. Pertahankan parameter dinamis, query string, dan fragment apabila ada.
4. Perbaiki kondisi navigasi profil berdasarkan role.
5. Pertahankan seluruh kode di luar bagian yang diizinkan.

Jangan mengedit file secara keseluruhan apabila hanya satu atau beberapa baris yang perlu diubah.

### Tahap 4 — Verifikasi

Setelah perubahan selesai:

1. Jalankan `php artisan route:list` untuk memeriksa nama route yang tersedia.
2. Periksa kembali link internal yang telah diubah.
3. Pastikan tidak ada pemanggilan `route()` dengan nama route yang tidak terdaftar.
4. Pastikan link eksternal, anchor, asset, dan endpoint yang dikecualikan tidak berubah.
5. Pastikan navigasi profil admin mengarah ke halaman admin.
6. Pastikan navigasi profil user mengarah ke halaman user.
7. Periksa diff Git untuk memastikan tidak ada perubahan di luar cakupan.
8. Jalankan pemeriksaan syntax atau pengujian yang relevan jika memungkinkan tanpa mengubah konfigurasi proyek.

Jangan menyatakan pengujian berhasil apabila perintah atau pemeriksaan tersebut belum benar-benar dijalankan.

Jika ditemukan route yang tidak memiliki named route, jangan menambahkannya secara otomatis. Catat URL dan file terkait dalam laporan.

## 5. Kriteria Keberhasilan

Tugas dianggap selesai jika:

- Semua `href` internal yang memenuhi kriteria telah menggunakan `route()` sesuai named route di `web.php`.
- Tidak ada nama route yang dikarang atau tidak terdaftar.
- Navigasi profil admin dan user mengarah ke tujuan yang benar.
- Link eksternal, asset, anchor, dan URL yang dikecualikan tetap utuh.
- Tidak ada perubahan desain, konten, fitur, autentikasi, middleware, database, atau file lain yang tidak diizinkan.
- Diff perubahan hanya menunjukkan perubahan yang diperlukan.
- Semua masalah yang tidak bisa diperbaiki tanpa melanggar batasan dilaporkan dengan jelas.

## 6. Format Laporan Akhir

Setelah pekerjaan selesai, berikan laporan dengan format:

### Ringkasan
- Status pengerjaan.
- Jumlah file yang diperiksa.
- Jumlah link yang berhasil diubah.
- Jumlah link yang belum dapat diubah karena named route tidak tersedia.

### Perubahan File
Untuk setiap file yang diubah, jelaskan:
- Path file.
- Jenis perubahan.
- Contoh sebelum dan sesudah.

### Navigasi Profil
- Route tujuan role admin.
- Route tujuan role user.
- Cara penentuan role yang digunakan.
- Hasil verifikasi masing-masing navigasi.

### Verifikasi
- Hasil `php artisan route:list`.
- Hasil pemeriksaan named route.
- Hasil pemeriksaan diff Git.
- Hasil pengujian yang benar-benar dilakukan.

### Masalah yang Ditemukan
Cantumkan semua link atau route yang tidak dapat diperbaiki tanpa mengubah bagian di luar ruang lingkup.

## 7. Instruksi Eksekusi Final

Mulai dengan mengaudit source code proyek yang tersedia, bukan dengan membuat kode contoh baru.

Kerjakan seluruh perubahan yang dapat dipastikan aman dan benar secara mandiri. Jangan meminta konfirmasi untuk setiap link yang pemetaannya sudah jelas.

Jika ada ambiguitas yang tidak dapat diselesaikan dari source code, jangan menebak dan jangan melakukan perubahan yang berisiko.

**Prioritas tertinggi adalah menjaga seluruh kode dan perilaku aplikasi tetap sama, kecuali perubahan atribut `href` dan navigasi profil berdasarkan role yang secara eksplisit diizinkan.**