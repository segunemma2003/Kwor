<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $guarded=['id'];
    public function user()
    {
        return $this->belongsTo('App\Account','user_id');
    }
}
