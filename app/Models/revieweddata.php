<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class revieweddata extends Model
{
    use HasFactory;
    protected $table='revieweddata';
    protected $primaryKey='RID';

    public function Store($post)
    {
        $objRProduct=new revieweddata();
        $objRProduct->Comments=$post['comments'];
        $objRProduct->RatingStars=$post['rating'];
        $objRProduct->ProductName=$post['Productname'];
        $objRProduct->ReviewedBy=$post['Reviewby'];
        $objRProduct->ProductID=$post['pid'];
        $objRProduct->save();
    }
    
}
