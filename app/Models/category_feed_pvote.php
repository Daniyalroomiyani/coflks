<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_feed_pvote extends Model
{
    use HasFactory;
    protected $table='category_feed_pvote';
    protected $fillable=[
        'cat_id',
        'feed_id'
    ];
    public $timestamps =false;

}
