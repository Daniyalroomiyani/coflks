<?php

namespace App\Casts;

use App\utility\weight;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class weightCast implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function get($model, string $key, $value, array $attributes)
    {
        $a = [
            '1'=>new weight(1,'250 گرم'),
            '2'=>new weight(2 ,'500 گرم'),
            '3'=>new weight(3,'750 گرم'),
            '4'=>new weight(4, 'کیلوگرم'),
        ];
        return $a[$value];
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function set($model, string $key, $value, array $attributes)
    {
        return $value;

    }
}
