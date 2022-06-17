<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userslogin extends Model
{
    use HasFactory;
    protected $table='userslogin';
    protected $primaryKey='ID';

    public function Store($post)
    {
        $objuser=new userslogin();
        $objuser->FullName=$post['Fname'];
        $objuser->Profession=$post['profession'];
        $objuser->Gender=$post['gender'];
        $objuser->Email=$post['email'];
        $objuser->Password=$post['password'];
        $objuser->Status="Pending";
        
        $objuser->save();
    }
}
