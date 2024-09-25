<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table="products";
    protected $fillable=['p_name',"p_mass","p_price"];
    
    use HasFactory;
}
