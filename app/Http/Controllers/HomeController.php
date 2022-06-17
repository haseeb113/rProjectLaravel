<?php

namespace App\Http\Controllers;
use \App\Models\adminlogin;
use \App\Models\vendorlogin;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function ShowLogin()
    {
        if(session()->has('admin'))
        {
            
            return redirect('showdash');
        }
        else
        {
            $data['error']='';
            $data['posteddata']=session()->get('posteddata');
            $data['error']=session()->get('error');
            return view('AdminLogin',$data);
        }
    }
    public function VerifyLogin(Request $request)
    {
        $post=request()->all();
        // dd($post);
        $validator=validator()->make($post,[
            'Email'=>'required',
            'Password'=>'required',
        ]);
        if($validator->fails())
        {
            return redirect('Showlogin')->with([
                'posteddata'=>$post,
                'error'=>$validator->errors()->first()
            ]);
        }
        else
        {
        $objadmin=adminlogin::where('Email',$request->Email)->where('Password',$request->Password)->first();
        if ($objadmin) {
            $request->session()->put('admin',$objadmin);
            return redirect('showdash');    
        }
        else
        {
            return redirect('Showlogin');
        }
    }
    }
    public function LogoutAction()
    {
        if(session()->has('admin'))
        {
            session()->forget('admin');
            return redirect('Showlogin');
        }
    }
    public function ShowRegister()
    {
        return view('VendorRegister');
    }
    public function VerifyVendorLogin(Request $request)
    {
        dd($request);
    }
    public function SaveVendor(Request $request)
    {
        dd($request);
    }
}
