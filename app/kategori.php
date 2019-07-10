<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
class Kategori extends Model
{
    protected $fillabel = ['nama_kategori','slug'];
    public function artikel()
    {
    	return $this->hasMany('App\Artikel','id');
    }
   
}
