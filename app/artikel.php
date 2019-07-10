<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $fillable =[
    	'judul','slug','foto','kontent','id_user','id_kategori'
    ];
  public $timestamps = true;

  public function kategori(){
  	return $this->belongsTo('App\kategori','id_kategori');
  }
    public function user(){
  	return $this->belongsTo('App\user','id_user');
  }
  public function tag(){
  	return $this->belongsToMany('App\Tag','artikel_tag','id_artikel','id_tag');
  }
}
