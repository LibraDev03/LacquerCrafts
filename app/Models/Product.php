<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $appends = ['favorited'];

    protected $fillable= [
        'name',
        'slug',
        'weight',
        'dimensions',
        'price',
        'discount',
        'image',
        'description',
        'status',
        'category_id',
    ];

    public function cat() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function getFavoritedAttribute() {
        $favorited = Favorite::where(['product_id'=> $this->id , 'user_id'=> auth()->id()])->first();
        return $favorited ? true : false;
    }
}
