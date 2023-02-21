<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class machineCast implements CastsAttributes
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
        return $value;
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
        $a = [
            '1'=>'صنعتی',
            '2'=>'نیمه صنعتی',
            '3'=>'خانگی',
            '4'=>'موکاپات',
            '5'=>'V60',
            '6'=>'مکس',
            '7'=>'سایفون',
            '8'=>'فرانسه',
        ];
        return $a[$value];
        return $value;
    }
}
