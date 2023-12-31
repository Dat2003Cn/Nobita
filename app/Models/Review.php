<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table= "reviews";
    protected $fillable = ['id','user_id','product_id','rating','comment','reviewdate'];
}
