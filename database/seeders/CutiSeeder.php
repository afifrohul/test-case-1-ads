<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CutiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cuti = new \App\Models\Cuti();
        $cuti->nomor_induk = 'IP06001';
        $cuti->tanggal_cuti = '2020-08-02';
        $cuti->lama_cuti = 2;
        $cuti->keterangan = "Acara Keluarga";
        $cuti->save();

        $cuti = new \App\Models\Cuti();
        $cuti->nomor_induk = 'IP06001';
        $cuti->tanggal_cuti = '2020-08-18';
        $cuti->lama_cuti = 2;
        $cuti->keterangan = "Anak Sakit";
        $cuti->save();

        $cuti = new \App\Models\Cuti();
        $cuti->nomor_induk = 'IP06006';
        $cuti->tanggal_cuti = '2020-08-19';
        $cuti->lama_cuti = 1;
        $cuti->keterangan = "Nenek Sakit";
        $cuti->save();

        $cuti = new \App\Models\Cuti();
        $cuti->nomor_induk = 'IP06007';
        $cuti->tanggal_cuti = '2020-08-23';
        $cuti->lama_cuti = 1;
        $cuti->keterangan = "Sakit";
        $cuti->save();

        $cuti = new \App\Models\Cuti();
        $cuti->nomor_induk = 'IP06004';
        $cuti->tanggal_cuti = '2020-08-29';
        $cuti->lama_cuti = 5;
        $cuti->keterangan = "Menikah";
        $cuti->save();

        $cuti = new \App\Models\Cuti();
        $cuti->nomor_induk = 'IP06003';
        $cuti->tanggal_cuti = '2020-08-30';
        $cuti->lama_cuti = 2;
        $cuti->keterangan = "Acara Keluarga";
        $cuti->save();

    }
}
