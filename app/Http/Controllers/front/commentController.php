<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\comment;
use Illuminate\Http\Request;

class commentController extends Controller
{
    public function save(Request $request)
    {


        $data=[
            'name'=>$request->input('name'),
            'msg'=>$request->input('txt'),
        ];

        if ($request->input('rate') > 5)
            $data['rate'] = 5;
        elseif ($request->input('rate')<0)
            $data['rate']=0;
        else
            $data['rate'] = $request->input('rate');



        $newdata =comment::create($data);

        if ($newdata && $newdata instanceof comment) {



            return redirect()->route('index_home')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
        }
    }
}
