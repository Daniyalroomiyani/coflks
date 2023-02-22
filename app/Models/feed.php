<?php

namespace App\Models;

use App\Casts\ShmasiCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feed extends Model
{
    use HasFactory;
    protected $fillable=[
      'tittle',
      'pic',
      'caption',
      'visited',


    ];
    public function category()
    {
        return $this->belongsToMany(category_for_feed::class, 'category_feed_pvote', 'feed_id', 'cat_id');
    }
    protected $casts = [
        'created_at'=>ShmasiCast::class];



}
