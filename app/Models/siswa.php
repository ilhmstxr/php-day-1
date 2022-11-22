<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        'nama',
        'id_kelas',
        'alamat',
        'jk',
        'about',
        'foto',
        
    ];
    protected $table = 'siswa';

    // public function kontak()
    // {    
    //     return $this->hasMany('App\models\jenis_kontak_siswa')->withpivot('App');
    // }

    public function kelas(){
        return $this->belongsTo('App\models\kelas', 'id');
    }


    // public function project(){
    //     return $this->hasMany('App\Models\project', 'id_siswa');
    // }

    public function kontak(){
        return $this->belongsToMany('App\Models\jenis_kontak')-> withPivot('id' ,'deskripsi');
    }

    
}
