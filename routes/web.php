<?php

use Illuminate\Support\Facades\Route;

// Semua isi portofolio diatur di sini. Ubah teksnya, simpan, lalu push.
Route::get('/', function () {
    return view('portfolio', [
        'nama' => 'Bowo Ardhi Saputro',
        'peran' => 'Mahasiswa Ilmu Komputer, calon web developer',

        // Silakan ganti dengan cerita kamu sendiri.
        'ringkasan' => 'Saya mahasiswa Ilmu Komputer yang sedang belajar menjadi web developer. '
            . 'Saya membuat halaman web dengan PHP dan Laravel, lalu menatanya dengan HTML dan CSS. '
            . 'Situs ini adalah salah satu latihan saya yang sudah online.',

        'skills' => [
            ['nama' => 'PHP', 'ket' => 'Bahasa utama saya untuk logika di sisi server.'],
            ['nama' => 'Laravel', 'ket' => 'Framework yang saya pakai untuk membangun situs ini.'],
            ['nama' => 'HTML/CSS', 'ket' => 'Menyusun halaman yang rapi dan nyaman dibuka di HP.'],
        ],

        // Tambahkan proyek lain dengan menyalin satu blok [ ... ].
        'proyek' => [
            [
                'nama' => 'Situs portofolio ini',
                'ket' => 'Dibuat dengan Laravel dan dipasang di Vercel. Kodenya bisa dilihat di GitHub.',
                'tautan' => 'https://github.com/Bowo66/portofolio',
                'teks_tautan' => 'Lihat kode di GitHub',
            ],
        ],

        'kontak' => [
            ['label' => 'Email', 'teks' => 'bowoardhi18@gmail.com', 'url' => 'mailto:bowoardhi18@gmail.com'],
            ['label' => 'GitHub', 'teks' => 'github.com/Bowo66', 'url' => 'https://github.com/Bowo66'],
            ['label' => 'Instagram', 'teks' => '@ardhibowo', 'url' => 'https://instagram.com/ardhibowo'],
            ['label' => 'WhatsApp', 'teks' => '0895601601138', 'url' => 'https://wa.me/62895601601138'],
        ],
    ]);
});
