<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Push extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    // table名を指定
    protected $table = 'pushes';

    // カラムを指定
    protected $fillable = ['comment'];

}
