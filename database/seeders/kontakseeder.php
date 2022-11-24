<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\jenis_kontak;
use App\Models\kontak;


class kontakseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        jenis_kontak::create([
            'jenis_kontak' => 'wangsaff'
        ]);

        kontak::create([
            'siswa_id' => '1',
            'jenis_kontak_id' => '1',
            'deskripsi' => '081231470106'
        ]);

        kontak::create([
            'siswa_id' => '2',
            'jenis_kontak_id' => '1',
            'deskripsi' => '02139058102'
        ]);
    }
}
