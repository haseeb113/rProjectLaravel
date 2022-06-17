<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productdata extends Model
{
    use HasFactory;
    protected $table = 'productdata';
    protected $primaryKey = 'ProductID';

    public function Store($request)
    {
        //  dd($request);
        // dd($request->ProductID);
        if (!empty($request->ProductID)) {
            $objproduct = productdata::find($request->ProductID);
        } else {
            $objproduct = new productdata();
        }
        $objsession=session()->get('admin');
        $objproduct->ProductCategory = $request->ProductCategory;
        $objproduct->ProductName = $request->ProductName;
        $objproduct->Price = $request->Price;
        $objproduct->Details = $request->Details;
        $objproduct->AddedBy=$objsession->FullName;
        // $objproduct->ReviewCount=
        $objproduct->Status="Active";
        
        $objproduct->save();
        if ($request->hasFile('ProductImage')) {
            // dd($request);
            $id = $objproduct['ProductID'];
            $path = public_path("images");
            $image = 'P'.$id . '.' . $request->ProductImage->extension();
            $request->ProductImage->move($path, $image);
            self::where('ProductID', $id)->update(['ProductImage' => $image]);
        }
       
    }
}
