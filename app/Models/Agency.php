<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Agency extends Eloquent
{
    //use HasFactory;
    protected $primaryKey = '_id';
    protected $fillable = [
        'manager_id',
        'state_id',
        'name',
        'code',
        'phone',
        'fax',
        'email',
        'address',
        'status',
    ];
}
