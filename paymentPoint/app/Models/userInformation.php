<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userInformation extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama','email','alamat','telp'];
}
