<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDatail extends Model
{
    use HasFactory;
    protected $table = "orderdetails";
    protected $fillable =['id', 'product_id', 'quantity','uniprice','totalprice'];
}

