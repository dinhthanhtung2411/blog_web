<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Blog extends  Model
{
    protected $fillable=['title','subtitle','user_id', 'content'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
