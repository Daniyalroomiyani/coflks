<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;
    protected $table='config';

    protected $fillable=[
        'title',
        'about',
        'phone',
        'Email',
        'instagram',
        'telegram',
        'address',
        'pics',
    ];
    protected $casts=[
        'pics'=>'array'
    ];
     public $timestamps=false;
}
