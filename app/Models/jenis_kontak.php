<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class jenis_kontak extends Model
    {
        use HasFactory;
        protected $fillable = [
            'jenis_kontak'
        ];

        protected $table = "jenis_kontak";

        // public function siswa()
        // {
        //     // return $this->belongsTo('App\Models\siswa', 'id');
        // }

        public function siswa(){
            return $this->belongsTo('App\Models\siswa', 'id');
        }
    }
