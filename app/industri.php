<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class industri extends Model
{
    protected $table ='industris';
    protected $fillable = ['nama','tahun_kerjasama','programstudis_id'];
    public $timestamps = true;

    public function programstudi(){
        return $this->belongsTo('App\programstudi','programstudis_id');
    }
}