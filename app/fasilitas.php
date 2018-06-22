<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    protected $table ='fasilitas';
    protected $fillable = ['nama','jumlah',];
    public $timestamps = true;

    public function programstudi(){
        return $this->belongsTo('App\programstudi','programstudis_id');
    }
    
}