<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
// Changing the first letter of the name fielf to 
// an uppercase letter.
    public function getNameAttribute($value){
        return ucFirst($value);
    }
// Adding 'INDIA' to the address field.
    public function getAddressAttribute($value){
        return $value.", INDIA";
    }
    
}
