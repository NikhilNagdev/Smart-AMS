<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    //
    public function user(){
        return $this->belongsTo(user_role::class);
    }
}
