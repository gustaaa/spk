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
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C2",
                'nama' => "H-Index GS",
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C3",
                'nama' => "Dok Scopus",
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C4",
                'nama' => "Jurnal Terakreditasi",
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C5",
                'nama' => "Dok Pengabdian",
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C6",
                'nama' => "Sertifikasi Kompetensi",
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C7",
                'nama' => "Pembicara External",
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C8",
                'nama' => "Keanggotaan Profesi Dosen",
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C9",
                'nama' => "Jabatan Fungsional",
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C10",
                'nama' => "Lama Mengajar",
                'tipe' => "Benefit",
            ],
            [
                'kode' => "C11",
                'nama' => "Umur",
                'tipe' => "Cost",
            ],
            [
                'kode' => "C12",
                'nama' => "Surat Peringatan",
                'tipe' => "Cost",
            ],
        ]);
    }
}
