<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class histories extends Model
{
    use HasFactory;
    protected $fillable = ['id','email','type','price','status','paymentMethod','date','refNo'];
}
