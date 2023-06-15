<?php

namespace Database\Seeders;

use App\Models\kriteria;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\kriteria::insert([
            [
                'kode' => "C1",
                'nama' => "H-Index Scopus",
                'bobot' => '',
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C2",
                'nama' => "H-Index GS",
                'bobot' => '',
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C3",
                'nama' => "Dok Scopus",
                'bobot' => '',
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C4",
                'nama' => "Jurnal Terakreditasi",
                'bobot' => '',
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C5",
                'nama' => "Dok Pengabdian",
                'bobot' => '',
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C6",
                'nama' => "Sertifikasi Kompetensi",
                'bobot' => '',
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C7",
                'nama' => "Pembicara External",
                'bobot' => '',
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C8",
                'nama' => "Keanggotaan Profesi Dosen",
                'bobot' => '',
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C9",
                'nama' => "Jabatan Fungsional",
                'bobot' => '',
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C10",
                'nama' => "Lama Mengajar",
                'bobot' => '',
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C11",
                'nama' => "Umur",
                'bobot' => '',
                'tipe' => "Cost",
            ],
            [
                'kode' => "C12",
                'nama' => "Surat Peringatan",
                'bobot' => '',
                'tipe' => "Cost",
            ],
        ]);
    }
}
