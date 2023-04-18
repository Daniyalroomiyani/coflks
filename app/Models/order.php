<?php

namespace App\Models;

use App\Casts\order_statusCast;
use App\Casts\ShmasiCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable=[
        'fullName',
        'phone',
        'address',
        'total_price',
        'status',
        'caption',
    ];
    protected $casts=[
        'created_at'=>ShmasiCast::class,
        'status'=>order_statusCast::class,
    ];


    public function products()
    {
        return $this->belongsToMany(product::class , 'order_products' , 'order_id' , 'product_id');
    }

    public function payments()
    {
        return $this->hasMany(payment::class , 'order_id');
    }
}
