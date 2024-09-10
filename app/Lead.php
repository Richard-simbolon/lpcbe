<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    //
    protected $table = 'leads';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'username_id',
        'utm_campaign',
        'utm_source',
    ];
}
