<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $guarded=['id'];
    public function user()
    {
        return $this->hasOne('App\Account','user_id');
    }
}
