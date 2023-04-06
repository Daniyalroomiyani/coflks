<?php

namespace App\utility;

use App\Models\Config;
use App\Models\order;

class RenderData
{
    public static function GetOrders(int $id)
    {

        return order::find($id)->products()->get();
    }

    public static function getMainData()
    {  $config = Config::all();

        if ($config == null || count($config) == 0)
            $config = Config::create([
                'about' => '',
                'phone' => '',
                'Email' => '',
                'instagram' => '',
                'telegram' => '',
                'address' => '',
                'pics' => [
                    'up' => '',
                    'down' => '',
                    'backG' => '',
                    'icon' => '',
                    'step1' => '',
                    'step2' => '',
                    'step3' => '',
                    'step4' => ''
                ],
            ]);

        $item = $config[0];
        return $item;

    }
}
