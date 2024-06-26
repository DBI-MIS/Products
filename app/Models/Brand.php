<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'brand_logo',
    ];

    // public function product()
    // {
    //     return $this->hasOne(Product::class);
    // }

    // public function brand_product()
    // {
    //     return $this->hasMany(Product::class);
    // }


}
