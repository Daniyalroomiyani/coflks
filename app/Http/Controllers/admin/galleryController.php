<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\gallery;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    public function index()
    {
        $items = gallery::all();

        return view('Admin.gallery.list' , compact('items'));
    }

    public function add()
    {
        $cats = gallery::all();
        return view('Admin.gallery.form' );
    }

    public function save(Request $request)
    {

        $this->validate($request ,[
            'title'=>'required ',
            'about'=>'required '
        ] ,
            [
                'title.required' => 'ورود نام الزامی است.',
                'about.required' => 'ورود توضیحات الزامی است.'
            ]);
        $data=[
            'title'=>$request->input('title'),
            'about'=>$request->input('about'),
        ];
//        dd($data ,$cats);
        if($request->files->count()>0){
            $data['pic']= $request->file('pic')->getClientOriginalName();
            $request->file('pic')->move(storage_path('app/public/images/gallery') , $request->file('pic')->getClientOriginalName());
        }


        $newdata =gallery::create($data);

        if ($newdata && $newdata instanceof gallery) {



            return redirect()->route('list_gallery')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
        }
    }

    public function edit(int $id)
    {
        $item = gallery::find($id);

        return view('Admin.gallery.form' , compact('item' ));
    }

    public function edit_save(Request $request , int $id)
    {
        $this->validate($request ,[
            'title'=>'required ',
            'about'=>'required '
        ] ,
            [
                'title.required' => 'ورود نام الزامی است.',
                'about.required' => 'ورود توضیحات الزامی است.'
            ]);
        $item= gallery::find($id);
        $item->title = $request->input('title');
        $item->about = $request->input('about');

        if($request->files->count()>0){
            $item->pic= $request->file('pic')->getClientOriginalName();
            $request->file('pic')->move(storage_path('app/public/images/gallery') , $request->file('pic')->getClientOriginalName());
        }

        $item->save();
        return redirect()->route('list_gallery')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
    }

    public function del( int $id)
    {
        $item =gallery::destroy($id);
        return redirect()->route('list_gallery')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
    }
}

