<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Agency extends Model
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
