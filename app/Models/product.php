<?php

namespace App\Models;

use App\Casts\weightCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'caption',
        'pic',
        'price',
        'count',
        'weight',
        'machine',
        'cat_id',
        'arabica',
        'robusta',
    ];

    protected $casts = [
//        'weight'=>weightCast::class,
        ];

    public function Category()
    {
        return $this->belongsTo(category_for_products::class , 'cat_id');
    }

    public function order()
    {
        return $this->belongsToMany(order::class , 'order_products' , 'product_id','order_id');
    }
}
