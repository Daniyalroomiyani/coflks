<?php

namespace App\Models;

use App\Casts\pay_statusCast;
use App\Casts\ShmasiCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_id',
        'invoice_details',
        'transaction_result',
        'transaction_id',
        'status',
        'order_id',
    ];
    protected $casts = [

        'created_at' => ShmasiCast::class,
        'transaction_result'=>'array',
        'invoice_details'=>'array',
        'status'=>pay_statusCast::class,

    ];
    public function Orders()
    {

        return $this->belongsTo(order::class, 'order_id');
    }

}
