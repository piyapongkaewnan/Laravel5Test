<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = 'customers';
    protected $fillable = ['cust_name','cust_email','cust_address','cust_birthdate','cust_phone'];
}
