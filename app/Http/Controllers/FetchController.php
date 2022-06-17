<?php

namespace App\Http\Controllers;
use \App\Models\userslogin;
use \App\Models\productdata;
use \App\Models\revieweddata;
use Illuminate\Http\Request;

class FetchController extends Controller
{
    public function Saveuser()
    {
        $post =request()->post();
 
        $objuser=userslogin::Store($post);
        return [
            "Status" => "SAved"
        ];
    }
   public function CheckLogin()
   {
    $post=request()->post();
    $objuser=userslogin::where('Email',$post['email'])->where('Password',$post['password'])->where('Status',"Approved")->first();
    if ($objuser) {
        return [
            "Status"=>"Login Success",
            "UserDetails"=>$objuser
        ];
    }
    else
    {
        return [
            "Status"=>"Login Failed"
        ];
    }
   }
   public function userapproval($id)
   {
    // dd($id);
        $objuser=userslogin::find($id);
        // $objuser=userslogin::where('ID', '=', e($id))->first();
        // dd($objuser);
        if($objuser)
        {
            $objuser->Status="Approved";
            $objuser->save();
            return redirect('showuser');
        }
   }
   public function userrejection($id)
   {
    // dd($id);
        $objuser=userslogin::find($id);
        if($objuser)
        {
            $objuser->Status="Rejected";
            $objuser->save();
            return redirect('showuser');
        }
   }
   public function ShowProducts()
   {
    $objRProduct=productdata::all();
    return $objRProduct;
   }
   public function ShowProductbyID()
   {
    $data=request()->all();
    $objPbyID=productdata::where('ProductID',$data)->first();
    return $objPbyID;
   }
   public function SaveReview()
   {
    $post =request()->post();
    $objRProduct=revieweddata::Store($post);
    return [
        "Status"=>"Saved Data"
    ];
   }
   public function ShowRProduct()
   {
    $data=request()->all();
    $objRProduct=revieweddata::where('ReviewedBy',$data)->get();
    return $objRProduct;
   }
   public function ReviewCount()
   {
    $id=request()->all();
    $objRProduct=Count(revieweddata::where('ProductID',$id)->get());
    return $objRProduct;
   }
}
