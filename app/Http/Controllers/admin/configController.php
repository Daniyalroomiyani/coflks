<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Exception;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isReadable;
use function Symfony\Component\String\s;

class configController extends Controller
{
    public function edit()
    {

        $config = Config::all();

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

//        dd($item->pics);
        return view("Admin.Config.form", compact('item'));


    }

    public function upload(Request $request)
    {
        $item = Config::all()[0];
        $tempPic = $item->pics;
//        $t['up']= 'sd';
//        $item->pics=$t;
//
//        dd($item->pics);

        if (isset($request->up)) {
            $tempPic['up'] = $request->file('up')->getClientOriginalName();
            $request->file('up')->move(storage_path('app/public/images/site'), $request->file('up')->getClientOriginalName());
        }
        if (isset($request->down)) {
            $tempPic['down'] = $request->file('down')->getClientOriginalName();
            $request->file('down')->move(storage_path('app/public/images/site'), $request->file('down')->getClientOriginalName());
        }
        if (isset($request->backG)) {
            $tempPic['backG'] = $request->file('backG')->getClientOriginalName();
            $request->file('backG')->move(storage_path('app/public/images/site'), $request->file('backG')->getClientOriginalName());
        }
        if (isset($request->icon)) {
            $tempPic['icon'] = $request->file('icon')->getClientOriginalName();
            $request->file('icon')->move(storage_path('app/public/images/site'), $request->file('icon')->getClientOriginalName());
        }
        if (isset($request->step1)) {
            $tempPic['step1'] = $request->file('step1')->getClientOriginalName();
            $request->file('step1')->move(storage_path('app/public/images/site'), $request->file('step1')->getClientOriginalName());
        }
        if (isset($request->step2)) {
            $tempPic['step2'] = $request->file('step2')->getClientOriginalName();
            $request->file('step2')->move(storage_path('app/public/images/site'), $request->file('step2')->getClientOriginalName());
        }
        if (isset($request->step3)) {
            $tempPic['step3'] = $request->file('step3')->getClientOriginalName();
            $request->file('step3')->move(storage_path('app/public/images/site'), $request->file('step3')->getClientOriginalName());
        }
        if (isset($request->step4)) {
            $tempPic['step4'] = $request->file('step4')->getClientOriginalName();
            $request->file('step4')->move(storage_path('app/public/images/site'), $request->file('step4')->getClientOriginalName());
        }


        $item->pics = $tempPic;
        $item->save();
        return redirect()->route('home')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));

    }

    public function save(Request $request)
    {
        $item = Config::all()[0];

        $item->instagram = $request->input('instagram');
        $item->telegram = $request->input('telegram');
        $item->phone = $request->input('phone');
        $item->Email = $request->input('Email');
        $item->about = $request->input('about');
        $item->title = $request->input('title');
        $item->address = $request->input('address');
        $item->save();
        return redirect()->route('home')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
    }


}
