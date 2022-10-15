<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductService;

class ProductCategory extends Model
{
    public function product_services()
    {
        return $this->belongsTo(ProductService::class, 'category_id', 'id');
    }
}
