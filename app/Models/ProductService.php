<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategory;

class ProductService extends Model
{
    public function product_categotry()
    {
        return $this->hasMany(ProductCategory::class, 'category_id', 'id');
    }
}
