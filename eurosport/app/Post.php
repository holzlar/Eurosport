<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';
    public $primaryKey='id';
    public $timestamps='true';
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public  function addComment($body){
        Comment::create([
            'body'=>request('body'),
            'post_id'=>$this->id
        ]);
        return back();
    }
}