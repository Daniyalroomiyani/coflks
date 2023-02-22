<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_for_feed extends Model
{
    use HasFactory;
    protected $fillable=[
        'name'
    ];
    public $timestamps =false;
    public function feeds() {
        return $this->belongsToMany(Feed::class, 'category_feed_pvote' , 'cat_id'  , 'feed_id');
    }
}
