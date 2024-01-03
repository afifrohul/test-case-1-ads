<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pegawai = new \App\Models\Pegawai();
        $pegawai->nomor_induk = "IP06001";
        $pegawai->nama = "Agus";
        $pegawai->alamat = "Jln Gaja Mada no 12, Surabaya";
        $pegawai->tanggal_lahir = "1980-01-11";
        $pegawai->tanggal_bergabung = "2005-08-07";
        $pegawai->save();

        $pegawai = new \App\Models\Pegawai();
        $pegawai->nomor_induk = "IP06002";
        $pegawai->nama = "Amin";
        $pegawai->alamat = "Jln Imam Bonjol no 11, Mojokerto";
        $pegawai->tanggal_lahir = "1977-09-03";
        $pegawai->tanggal_bergabung = "2005-08-07";
        $pegawai->save();

        $pegawai = new \App\Models\Pegawai();
        $pegawai->nomor_induk = "IP06003";
        $pegawai->nama = "Yusuf";
        $pegawai->alamat = "Jln A Yani Raya 15 No 14 Malang";
        $pegawai->tanggal_lahir = "1973-08-09";
        $pegawai->tanggal_bergabung = "2006-08-07";
        $pegawai->save();

        $pegawai = new \App\Models\Pegawai();
        $pegawai->nomor_induk = "IP06004";
        $pegawai->nama = "Alyssa";
        $pegawai->alamat = "Jln Bungur Sari V no 166, Bandung";
        $pegawai->tanggal_lahir = "1983-03-18";
        $pegawai->tanggal_bergabung = "2006-09-06";
        $pegawai->save();

        $pegawai = new \App\Models\Pegawai();
        $pegawai->nomor_induk = "IP06005";
        $pegawai->nama = "Maulana";
        $pegawai->alamat = "Jln Candi Agung, No 78 Gg 5, Jakarta";
        $pegawai->tanggal_lahir = "1978-11-10";
        $pegawai->tanggal_bergabung = "2006-09-10";
        $pegawai->save();

        $pegawai = new \App\Models\Pegawai();
        $pegawai->nomor_induk = "IP06006";
        $pegawai->nama = "Agfika";
        $pegawai->alamat = "Jln Nangka, Jakarta Timur";
        $pegawai->tanggal_lahir = "1979-02-07";
        $pegawai->tanggal_bergabung = "2007-01-02";
        $pegawai->save();

        $pegawai = new \App\Models\Pegawai();
        $pegawai->nomor_induk = "IP06007";
        $pegawai->nama = "James";
        $pegawai->alamat = "Jln Merpati, 8 Surabaya";
        $pegawai->tanggal_lahir = "1989-05-18";
        $pegawai->tanggal_bergabung = "2007-04-04";
        $pegawai->save();

        $pegawai = new \App\Models\Pegawai();
        $pegawai->nomor_induk = "IP06008";
        $pegawai->nama = "Octavanus";
        $pegawai->alamat = "Jln A Yani 17, B 08 Sidoarjo";
        $pegawai->tanggal_lahir = "1985-04-14";
        $pegawai->tanggal_bergabung = "2007-05-19";
        $pegawai->save();

        $pegawai = new \App\Models\Pegawai();
        $pegawai->nomor_induk = "IP06009";
        $pegawai->nama = "Nugroho";
        $pegawai->alamat = "Jln Duren tiga 167, Jakarta Selatan";
        $pegawai->tanggal_lahir = "1984-01-01";
        $pegawai->tanggal_bergabung = "2008-01-16";
        $pegawai->save();

        $pegawai = new \App\Models\Pegawai();
        $pegawai->nomor_induk = "IP06010";
        $pegawai->nama = "Raisa";
        $pegawai->alamat = "Jln Kelapa Sawit, Jakarta Selatan";
        $pegawai->tanggal_lahir = "1990-12-17";
        $pegawai->tanggal_bergabung = "2008-08-16";
        $pegawai->save();
    }
}
