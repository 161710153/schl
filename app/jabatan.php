<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    protected $table ='jurusan';
    protected $fillable = ['nm_jabatan'];
    public $timestamps = true;

    public function Guru(){
        return $this->belongsTo('App\guru','gurus_id');
    }
}
