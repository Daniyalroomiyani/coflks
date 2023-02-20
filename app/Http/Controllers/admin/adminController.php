<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{

    public function login()
    {
        return view("Admin.user.login");

    }

    public function Dologin(Request $request)
    {
        $this->validate($request ,[

            'email'=>'required | email ',
            'password'=>'required | min:6',
        ],[

            'email.required'=>'وارد کردن ایمیل الزامی است.',
            'email.email'=>'ایمیل را فرمت صحیح وارد کنید.',
            'password.required'=>'رمز عبور الزامی است.',
            'password.min'=>'رمز عبور نباید کمتر از 6 کاراکتر باشد.'
        ]);

        $remember = $request->has('remember');

        if (Auth::attempt(['email'=>$request->input('email') , 'password'=>$request->input('password')],$remember)) {

            return redirect()->route('home');
        }
        else
            return redirect()->route('login')->with(session()->flash('success', 'نام کاربری(ایمیل) رمز عبور نادرست'));
    }

    public function register()
    {
        return view('Admin.user.register');

    }

    public function Doregister(Request $request)
    {


//       dd($request->all());

        $this->validate($request ,[
            'firstname'=>'required ',
            'lastname'=>'required ',
            'email'=>'required | email | unique:users,email',
            'password'=>'required | min:6',
        ],[
            'firstname.required' => 'ورود نام الزامی است.',
            'last.required' => 'ورود نام خانوادگی الزامی است.',
            'email.required'=>'وارد کردن ایمیل الزامی است.',
            'email.email'=>'ایمیل را فرمت صحیح وارد کنید.',
            'email.unique'=>'ایمیل تکراری می باشد.',
            'password.required'=>'رمز عبور الزامی است.',
            'password.min'=>'رمز عبور نباید کمتر از 6 کاراکتر باشد.'
        ]);


        $userdata=[
            'firstname'=>$request->input('firstname'),
            'lastname'=>$request->input('lastname'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ];
        if ($request->has('adminckeck'))
            $userdata['admin'] =true ;

        if(Auth::check()){
            $userdata['creator'] = Auth::user()->firstname  . " ". Auth::user()->lastname;
        }
        if($request->files->count()>0){
            $userdata['pic']= $request->file('pic')->getClientOriginalName();
            $request->file('pic')->move(storage_path('app/public/images') , $request->file('pic')->getClientOriginalName());
        }
//        dd($userdata);
        $newuser = User::create($userdata);
        if($newuser && $newuser instanceof User){

            return redirect()->route('userlist')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
        }
    }

    public function register_temp()
    {
        return view('Admin.temp.register');

    }

    public function Doregister_temp(Request $request)
    {


//       dd($request->all());

        $this->validate($request ,[
            'firstname'=>'required ',
            'lastname'=>'required ',
            'email'=>'required | email | unique:users,email',
            'password'=>'required | min:6',
        ],[
            'firstname.required' => 'ورود نام الزامی است.',
            'last.required' => 'ورود نام خانوادگی الزامی است.',
            'email.required'=>'وارد کردن ایمیل الزامی است.',
            'email.email'=>'ایمیل را فرمت صحیح وارد کنید.',
            'email.unique'=>'ایمیل تکراری می باشد.',
            'password.required'=>'رمز عبور الزامی است.',
            'password.min'=>'رمز عبور نباید کمتر از 6 کاراکتر باشد.'
        ]);


        $userdata=[
            'firstname'=>$request->input('firstname'),
            'lastname'=>$request->input('lastname'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ];
        if ($request->has('adminckeck'))
            $userdata['admin'] =true ;

        if(Auth::check()){
            $userdata['creator'] = Auth::user()->firstname  . " ". Auth::user()->lastname;
        }
        if($request->files->count()>0){
            $userdata['pic']= $request->file('pic')->getClientOriginalName();
            $request->file('pic')->move(storage_path('app/public/images') , $request->file('pic')->getClientOriginalName());
        }
//        dd($userdata);
        $newuser = User::create($userdata);
        if($newuser && $newuser instanceof User){

            return redirect()->route('userlist')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');

    }

    public function page403()
    {
        return view('Admin.page403');
    }

    public function userlist()
    {
        $users = User::all();

        return view('Admin.user.list' , compact('users'));
    }

    public function delete(int $id)
    {
        User::destroy($id);
        return redirect()->route('userlist')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));

    }

    public function edit(int $id)
    {
        $item = User::find($id);
        return view('Admin.user.register' , compact('item'));
    }

    public function save(Request $request, int $id)
    {
        $this->validate($request ,[
            'firstname'=>'required ',
            'lastname'=>'required ',
            'email'=>'required | email ',

        ],[
            'firstname.required' => 'ورود نام الزامی است.',
            'lastname.required' => 'ورود نام خانوادگی الزامی است.',
            'email.required'=>'وارد کردن ایمیل الزامی است.',
            'email.email'=>'ایمیل را فرمت صحیح وارد کنید.',
            'password.min'=>'رمز عبور نباید کمتر از 6 کاراکتر باشد.'
        ]);
        $user = User::find($id);
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        if ($request->has('adminckeck'))
            $user->admin = true;
        else
            $user->admin =false;
        if($request->files->count()>0){
            $user->pic= $request->file('pic')->getClientOriginalName();
            $request->file('pic')->move(storage_path('app/public/images') , $request->file('pic')->getClientOriginalName());
        }
//        if($user->password != $request->input('password')){
//            $user->password=  $request->input('password');
//        }
        //  $user->password = ($user->password == $request->input('password')) ?$user->password :$request->input('password');

        $user->save();
        return redirect()->route('userlist')->with(session()->flash('success', 'عملیات با موفقیت انجام شد.'));


    }
}
