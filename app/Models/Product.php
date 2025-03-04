<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'sale', 'image', 'image_secondary', 'description', 'category_id', 'status'];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
