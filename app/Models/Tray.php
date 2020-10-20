<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Tray extends Model
{
    use HasFactory;

    protected $primaryKey = '_id';
    protected $fillable = [
        'agency_id',
        'state_id',
        'name',
        'logo',
        'email',
        'phone',
        'fax',
        'address',
        'facebook',
        'instagram',
        'youtube',
        'viber',
        'whatsapp',
        'url',
    ];

}
