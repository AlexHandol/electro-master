<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'bio',
        'size',
        'color',
        'quantity',
        'price',
        'is_active',
        'is_hot_deal',
        'category_id'
    ];

    public function productsCategories()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
}
