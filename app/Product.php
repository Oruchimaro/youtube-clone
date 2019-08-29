<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = 
    [
        'pro_name',
        'pro_code',
        'pro_price',
        'pro_image',
        'pro_info',
        'sale_price',
        'category_id'
    ];

    public function categories()
    {
        return $this->belongsToMany('Category', 'categories');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
