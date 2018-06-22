<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ekskul extends Model
{
    protected $table ='ekskuls';
    protected $fillable = ['nama','jadwal'];
    public $timestamps = true;

    public function prestasi(){
        return $this->hasmany('App\prestasi','ekskuls_id');
    }
}