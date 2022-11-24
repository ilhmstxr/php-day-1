<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\siswa;
use App\Models\project;

class siswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        siswa::create([
            'nisn' => '0055606458',
            'nama' => 'Ilham Bintang Herlambang',
            'alamat' => 'Jl. Hayam Wuruk Baru 1 no 4',
            'jk' => 'Laki - Laki',
            'about' => 'gwehj adalah manusia yang manusia',
            'foto' => '404'
        ]);

        siswa::create([
            'nisn' => '00603123',
            'nama' => 'elemao cuyhj',
            'alamat' => 'jalanin aja dlu',
            'jk' => 'Laki - Laki',
            'about' => 'gwehj adalah manusia yang bukan manusia',
            'foto' => '404'
        ]);

        project::create([
            'id_siswa' => '1',
            'nama_project' => 'ini adalah projek',
            'deskripsi' => 'projek ini mengharuskan projek',
            'tanggal' => '2022-11-23'
        ]);

        project::create([
            'id_siswa' => '2',
            'nama_project' => 'ini adalah projek punyanya 2',
            'deskripsi' => 'projek ini mengharuskan 2 orang didalam projek',
            'tanggal' => '2022-11-23'
        ]);
    }
}
