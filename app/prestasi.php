<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    protected $table ='prestasis';
    protected $fillable = ['nama','tgl_peroleh','ekskuls_id'];
    public $timestamps = true;

    public function ekskul(){
        return $this->belongsTo('App\ekskul','ekskuls_id');
    }
}