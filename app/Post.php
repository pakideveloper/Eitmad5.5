<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'paper_posts';
    public function logo(){
        return $this->hasOne('App\newspaper' , 'id', 'paper_id');
    }

    


}
