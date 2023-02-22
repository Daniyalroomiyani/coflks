<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category_for_feed;
use App\Models\feed;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class Feedcontroller extends Controller
{
    public function index()
    {
        $items = Feed::all();

        return view('Admin.Feed.list' , compact('items'));
    }

    public function add()
    {
        $cats = category_for_feed::all();
        return view('Admin.Feed.form' , compact('cats'));
    }

    public function save(Request $request)
    {
//dd($request->all());
        $this->validate($request ,[
            'tittle'=>'required ',
            'caption'=>'required '
        ] ,
            [
                'tittle.required' => 'ورود نام الزامی است.',
                'caption.required' => 'ورود توضیحات الزامی است.'
            ]);
        $data=[
            'tittle'=>$request->input('tittle'),
            'caption'=>$request->input('caption'),
        ];
//        dd($data ,$cats);
        if($request->files->count()>0){
            $data['pic']= $request->file('pic')->getClientOriginalName();
            $request->file('pic')->move(storage_path('app/public/images/feeds') , $request->file('pic')->getClientOriginalName());
        }

//dd($data);
        $newdata =Feed::create($data);

        if ($newdata && $newdata instanceof Feed) {


            if ($request->has('category')){
                $newdata->category()->sync($request->input('category'));
            }

            return redirect()->route('list_Feed')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
        }
    }

    public function edit(int $id)
    {
        $item = Feed::find($id);
        $cats = category_for_feed::all();
        $select_ids =array();
        $Selected=$item->category()->get()->toArray();
        for ($i = 0 ; $i<count($Selected) ; $i++){
            $select_ids[$i] = $Selected[$i]['id'];
        }
        return view('Admin.Feed.form' , compact('item' , 'cats' ,'select_ids'));
    }

    public function edit_save(Request $request , int $id)
    {
        $this->validate($request ,[
            'tittle'=>'required ',
            'caption'=>'required '
        ] ,
            [
                'tittle.required' => 'ورود نام الزامی است.',
                'caption.required' => 'ورود توضیحات الزامی است.'
            ]);
        $item= Feed::find($id);
        $item->tittle = $request->input('tittle');
        $item->caption = $request->input('caption');

        if($request->files->count()>0){
            $item->pic= $request->file('pic')->getClientOriginalName();
            $request->file('pic')->move(storage_path('app/public/images/feeds') , $request->file('pic')->getClientOriginalName());
        }
        if ($request->has('category')){
            $item->category()->sync($request->input('category'));
        }

        $item->save();
        return redirect()->route('list_Feed')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
    }

    public function del( int $id)
    {
        $item =Feed::destroy($id);
//        $cat_ids[]= $item->category()->get()->toArray();
//        dd($cat_ids[0]);

        return redirect()->route('list_Feed')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
    }
}
