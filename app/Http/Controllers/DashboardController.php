<?php

namespace App\Http\Controllers;

use \App\Models\productdata;
use App\Models\revieweddata;
use \App\Models\userslogin;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function ShowDashboard()
    {
        if (session()->has('admin')) {
            $objsession=session()->get('admin');
            $objuser=Count(userslogin::all());
            $objpuser=Count(userslogin::where('Status',"Pending")->get());
            $objtproduct=Count(productdata::all());
            //  dd(Count($objpuser));
            return view('AdminDashboard',
            [
                'sdata'=>$objsession,
                'udata'=>$objuser,
                'puser'=>$objpuser,
                'tproduct'=>$objtproduct
            ]);
        } else {
            return redirect('Showlogin');
        }
    }
    public function SaveProduct(Request $request)
    {
        $post=request()->all();
        // dd($post);
        $validator=validator()->make($post,[
            'ProductCategory'=>'required',
            'ProductName'=>'required',
            'Price'=>'required',
            'Details'=>'required',
            'ProductImage'=>'required',
        ]);
        if($validator->fails())
        {
            return redirect('addproduct')->with([
                'posteddata'=>$post,
                'error'=>$validator->errors()->first()
            ]);
        }
        else{
        $objproduct = productdata::Store($request);
        return redirect('addproduct');
        }
    }
    public function AddProduct()
    {
        if (session()->has('admin')) {
            $objsession=session()->get('admin');
            $data['error']='';
            $data['posteddata']=session()->get('posteddata');
            $data['error']=session()->get('error');
            return view('AddProduct',
            $data,
            ['sdata'=>$objsession]);
        } else {
            return redirect('Showlogin');
        }
    }
    public function ShowProducts()
    {
        if (session()->has('admin')) {
            // $id=request()->all();
           
            // dd($objRPcount);
            $objsession=session()->get('admin');
            $objproduct = productdata::all();
            // echo "<pre>";
            // print_r($objproduct);exit;

            $objRPcount=Count(revieweddata::where('ProductID',1)->get());
            // dd($objRPcount);
            return view('ShowProduct',
             [
                'data' => $objproduct,
                'sdata'=>$objsession
            ]);
        } else {
            return redirect('Showlogin');
        }
    }
    public function DeleteProduct($id)
    {
        $objproduct = productdata::find($id);
        $objproduct->delete();
        return redirect('showproduct');
    }
    public function EditProduct($id)
    {
        $objsession=session()->get('admin');
        $objProduct=productdata::find($id);
        return view('AddProduct',['posteddata'=>$objProduct,'sdata'=>$objsession]);
    }
    public function ShowUserData()
    {
        if(session()->has('admin'))
        {
            $objuser=userslogin::all();
            $objsession=session()->get('admin');
            // dd($objsession);
            return view('ShowUserData',
            [
                'data'=>$objuser,
                'sdata'=>$objsession
            ]);
        }
        else
        {
            return redirect('Showlogin');
        }
    }
    public function ShowReviews()
    {
        if(session()->has('admin'))
        {
            $objrproduct=revieweddata::all();
            $objsession=session()->get('admin');
            return view('ShowRatedProduct',
            [
                'data'=>$objrproduct,
                'sdata'=>$objsession
            ]);
        }
        else
        {
            return redirect('Showlogin');
        }
    }
    public function ReviewCount()
    {
        $id=request()->all();
        $objRProduct=Count(revieweddata::where('ProductID',$id)->get());
        return $objRProduct;
    }
}
