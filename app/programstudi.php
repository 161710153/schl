<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programstudi extends Model
{
    protected $table ='programstudis';
    protected $fillable = ['nama_program','ket'];
    public $timestamps = true;

    public function fasilitas(){
        return $this->hasmany('App\fasilitas','programstudis_id');
    }
    public function industri(){
        return $this->hasmany('App\industri','programstudis_id');
    }

}