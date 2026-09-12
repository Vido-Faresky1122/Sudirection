Saya sedang mengembangkan fitur CHATBOT AI pada project Laravel.

TUGAS UTAMA:
Saya ingin kamu memperbaiki dan mengembangkan chatbot ini secara menyeluruh, baik dari sisi BACKEND maupun FRONTEND, dengan tetap mengikuti struktur project yang sudah ada.

==================================================
BATASAN FILE — SANGAT PENTING
==================================================

Kamu HANYA BOLEH membuat perubahan pada 3 file berikut:

1. chat.blade.php
2. ChatController.php
3. DirectionAgent.php

JANGAN mengubah, membuat, menghapus, atau memindahkan file lain.

JANGAN membuat:
- file CSS baru
- file JavaScript baru
- layout Blade baru
- component Blade baru
- controller baru
- route baru
- migration baru
- model baru
- config baru
- middleware baru
- file .env baru

Jika ada sesuatu yang biasanya membutuhkan file lain, implementasikan di dalam 3 file yang diizinkan atau gunakan fitur yang SUDAH tersedia di project.

Jika project sudah mempunyai layout Blade yang dapat digunakan, gunakan layout tersebut TANPA mengubah file layout-nya.

==================================================
REFERENSI DESAIN
==================================================

Saya akan memberikan 2 foto/screenshot sebagai referensi desain.

WAJIB:
- Analisis kedua gambar terlebih dahulu.
- Gunakan gambar sebagai acuan utama tampilan.
- Jangan sekadar meniru secara kasar.
- Perhatikan:
  - layout
  - spacing
  - typography
  - ukuran elemen
  - border radius
  - warna
  - card
  - navbar/header
  - chat bubble
  - input chat
  - tombol
  - icon
  - background
  - responsive behavior
  - hierarchy visual

Tujuan akhirnya adalah membuat halaman chatbot yang terlihat modern, bersih, profesional, dan konsisten dengan referensi yang saya berikan.

Jangan menggunakan desain generik AI chatbot jika tidak sesuai dengan screenshot.

==================================================
TEKNOLOGI FRONTEND
==================================================

Gunakan:

- Laravel Blade
- Tailwind CSS
- Vanilla JavaScript

Jangan menggunakan framework frontend tambahan seperti:
- React
- Vue
- Angular
- Alpine.js

kecuali project yang sudah ada memang menggunakan Alpine dan benar-benar diperlukan.

Prioritaskan utility class Tailwind.

Jangan membuat file CSS eksternal.

Jika membutuhkan CSS khusus, gunakan <style> di dalam chat.blade.php.

==================================================
CHATBOT FRONTEND
==================================================

Chatbot harus mempunyai:

1. Area chat
2. Pesan user
3. Pesan AI
4. Input message
5. Tombol send
6. Loading state ketika AI sedang memproses
7. Error state
8. Auto scroll ke pesan terbaru
9. Enter untuk mengirim pesan
10. Shift + Enter untuk membuat baris baru jika menggunakan textarea
11. Tombol send disabled ketika request sedang diproses
12. Tampilan responsive untuk:
    - desktop
    - tablet
    - mobile

Pesan user dan AI harus mempunyai visual yang berbeda.

Jangan menampilkan:

AI: undefined

Jika response kosong, tampilkan fallback yang masuk akal.

==================================================
JAVASCRIPT CHAT
==================================================

Gunakan fetch() untuk mengirim request ke backend yang SUDAH digunakan project.

Jangan mengubah route yang sudah ada hanya karena ingin membuat struktur baru.

Request harus mengirim:

{
    message: "pesan user"
}

Response backend saat berhasil menggunakan format:

{
    "status": "success",
    "response": "jawaban AI"
}

Frontend WAJIB membaca:

data.response

Bukan:

data.message

Namun jika backend saat ini masih mempunyai format berbeda, sesuaikan Controller agar response final konsisten dengan format:

{
    "status": "success",
    "response": "..."
}

==================================================
BACKEND — ChatController.php
==================================================

Pertahankan method yang sudah ada.

Saat ini struktur controller kurang lebih:

public function index()
{
    return view('chat');
}

public function sendMessage(Request $request)
{
    $request->validate([
        'message' => 'required|string',
    ]);

    $agent = new DirectionAgent();

    $response = $agent->prompt($request->message);

    return response()->json([
        'status' => 'success',
        'message' => (string) $response,
    ]);
}

Perbaiki agar response berhasil menjadi:

return response()->json([
    'status' => 'success',
    'response' => (string) $response,
]);

Gunakan try/catch agar error tidak menyebabkan frontend mendapatkan error yang tidak jelas.

Jika Gemini mengalami:
- overload
- timeout
- API error
- invalid response
- connection error

berikan JSON error yang konsisten.

Contoh:

{
    "status": "error",
    "message": "Gemini sedang sibuk. Silakan coba lagi beberapa saat."
}

Gunakan HTTP status yang sesuai.

Jangan membocorkan API key atau credential ke frontend.

==================================================
GEMINI / DirectionAgent.php
==================================================

DirectionAgent adalah agent yang digunakan untuk memproses pesan chatbot.

WAJIB:
- Gunakan konfigurasi Gemini yang SUDAH digunakan project.
- Jangan mengganti package AI tanpa alasan.
- Jangan mengarang API/package yang tidak ada di project.
- Jangan mengubah dependency composer.
- Jangan membuat file konfigurasi baru.
- Periksa implementasi DirectionAgent yang sekarang sebelum melakukan perubahan.

Saya sebelumnya mendapatkan error:

AI provider [gemini] is overloaded.

Artinya request sudah sampai ke provider Gemini, tetapi provider dapat mengalami overload.

Tangani error tersebut dengan baik.

Jika library/package yang digunakan mendukung retry, gunakan retry yang aman untuk error sementara seperti overload atau timeout.

Jangan melakukan retry tanpa batas.

Gunakan maksimal beberapa percobaan dengan delay yang wajar.

Jika tetap gagal, return error yang mudah dipahami user.

==================================================
SYSTEM PROMPT / PERILAKU AI
==================================================

DirectionAgent harus berfungsi sebagai chatbot yang membantu user.

AI harus:
- menjawab secara natural
- memahami konteks pertanyaan
- memberikan jawaban yang jelas
- tidak terlalu panjang jika pertanyaan sederhana
- menggunakan Bahasa Indonesia jika user menggunakan Bahasa Indonesia
- menggunakan bahasa user jika user menggunakan bahasa lain
- tidak mengarang informasi jika tidak mengetahui jawabannya

Jika chatbot ini berkaitan dengan project Sudirection, pertahankan konteks dan tujuan Sudirection yang sudah ada di project.

Jangan mengubah identitas/tujuan aplikasi tanpa alasan.

Jika ada system prompt yang sudah ada di DirectionAgent, pertahankan informasi pentingnya dan tingkatkan hanya jika diperlukan.

==================================================
LOADING STATE
==================================================

Saat user mengirim pesan:

1. Pesan user langsung muncul.
2. Input sementara dinonaktifkan.
3. Tombol send dinonaktifkan.
4. Tampilkan indikator AI sedang mengetik/proses.
5. Setelah response diterima:
   - hapus loading
   - tampilkan jawaban AI
   - aktifkan kembali input dan tombol send.

Jika request gagal:
- hapus loading
- tampilkan pesan error yang ramah
- aktifkan kembali input.

==================================================
CHAT UX
==================================================

Buat pengalaman chat seperti aplikasi modern.

Contoh:

User:
[pesan user]

AI:
[jawaban AI]

AI loading:
[animated typing indicator]

Pastikan scroll otomatis ke bawah ketika pesan baru muncul.

Jika chat-box memiliki tinggi tertentu, jangan sampai halaman rusak ketika pesan semakin banyak.

==================================================
RESPONSIVE
==================================================

Desktop:
- gunakan layout yang luas dan rapi
- chat container tidak terlalu melebar
- input chat nyaman digunakan

Tablet:
- sesuaikan spacing dan ukuran container

Mobile:
- chat memenuhi hampir seluruh layar
- input tetap nyaman digunakan
- tombol send tidak terpotong
- tidak ada horizontal overflow
- typography tetap terbaca

Gunakan breakpoint Tailwind.

==================================================
REUSABLE LAYOUT — PENTING
==================================================

Saya ingin struktur tampilan dibuat reusable dan rapi.

NAMUN kamu hanya boleh mengubah chat.blade.php.

Karena kamu TIDAK BOLEH membuat file layout/component baru, jangan membuat:
- resources/views/layouts/chat.blade.php
- components/chat-message.blade.php
- partials/chat.blade.php
- file Blade lainnya.

Jika sudah ada layout utama project, gunakan layout tersebut tanpa mengubah file layout.

Di dalam chat.blade.php:
- gunakan struktur Blade yang rapi
- gunakan data/array untuk elemen yang berulang
- gunakan @foreach jika ada elemen UI berulang
- hindari mengulang markup yang sama jika bisa dibuat lebih rapi
- gunakan class Tailwind yang konsisten
- gunakan naming class yang jelas jika custom CSS diperlukan

Pisahkan secara jelas bagian:
- header
- chat area
- message
- loading
- input
- JavaScript

Tetapi semuanya tetap berada di chat.blade.php.

==================================================
KEAMANAN
==================================================

WAJIB:
- gunakan CSRF token
- validasi input
- jangan expose GEMINI_API_KEY
- jangan memasukkan API key ke JavaScript
- jangan memasukkan credential ke HTML
- jangan menggunakan innerHTML untuk menampilkan input user jika bisa menyebabkan XSS

Untuk pesan yang berasal dari user, gunakan textContent atau metode yang aman.

Jika response AI perlu mendukung Markdown, pastikan implementasinya tidak menyebabkan XSS.

==================================================
KOMPATIBILITAS
==================================================

Sebelum mengubah kode:

1. Baca isi ketiga file.
2. Pahami struktur project.
3. Pahami bagaimana DirectionAgent saat ini memanggil Gemini.
4. Pahami route yang sudah digunakan.
5. Jangan mengubah route.
6. Jangan mengubah package.
7. Jangan mengubah file lain.

Jangan mengganti teknologi hanya karena kamu lebih terbiasa dengan teknologi lain.

==================================================
ATURAN PENTING SAAT CODING
==================================================

Jangan melakukan perubahan besar yang tidak diperlukan.

Pertahankan kode yang sudah bekerja.

Perbaiki hanya bagian yang memang diperlukan.

Jangan menghapus fitur existing kecuali memang rusak dan harus diperbaiki.

Jangan mengubah nama method:
- index()
- sendMessage()

kecuali benar-benar diperlukan oleh struktur project yang sudah ada.

Jangan membuat route baru.

Jangan membuat controller baru.

Jangan membuat DirectionAgent baru jika file tersebut sudah ada.

==================================================
HASIL AKHIR YANG SAYA INGINKAN
==================================================

Saya ingin hasil akhirnya:

1. Chatbot dapat mengirim pesan.
2. Gemini dapat memproses pesan.
3. Response AI tampil dengan benar.
4. Tidak ada lagi "AI: undefined".
5. Error Gemini ditangani dengan baik.
6. Loading state tersedia.
7. Error state tersedia.
8. UI mengikuti 2 screenshot yang saya berikan.
9. UI menggunakan Tailwind CSS.
10. Responsive.
11. Aman dari XSS.
12. CSRF tetap digunakan.
13. API key tetap rahasia.
14. Struktur kode rapi.
15. Hanya 3 file yang boleh berubah:
    - chat.blade.php
    - ChatController.php
    - DirectionAgent.php

==================================================
PROSES KERJA
==================================================

JANGAN langsung menulis kode sebelum membaca ketiga file tersebut.

Pertama:
- inspect ketiga file
- identifikasi masalah
- cocokkan dengan screenshot
- pahami library Gemini yang digunakan

Kemudian lakukan implementasi.

Setelah selesai:
- tampilkan ringkasan perubahan
- sebutkan hanya 3 file yang diubah
- jelaskan masalah yang diperbaiki
- jelaskan cara mengetes chatbot

JANGAN mengubah file lain.

Jika kamu menemukan masalah yang membutuhkan file lain, JANGAN mengubah file tersebut. Cari solusi yang masih dapat dilakukan hanya melalui 3 file yang diizinkan.

Jika ada informasi yang benar-benar tidak tersedia, tanyakan terlebih dahulu daripada mengarang struktur project.