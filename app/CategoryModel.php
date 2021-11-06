<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'categogy_name','id'
    ];

    public function products()
    {
        return $this->belongsToMany(ProductModel::class, 'category_product', 'category_id', 'product_id')->withTimestamps();
    }
}
