<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendorlogin extends Model
{
    use HasFactory;
    protected $table='vendorlogin';
    protected $primaryKey='ID';

    public function Store()
    {
        $objvendor=new vendorlogin();
        
    }
}
