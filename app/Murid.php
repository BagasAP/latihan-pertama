<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    //
	protected $table ='murids';
    protected $fillable = ['nama', 'orangtua_id', 'umur','jk', 'alamat'];
    protected $visible = ['nama', 'orangtua_id', 'umur','jk', 'alamat'];
    public $timestamps = true;

    public function orangtua()
    {
    	return $this->belongsTo('App\Orangtua','orangtua_id');
    }

}
