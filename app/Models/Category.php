<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    // 1 danh muc se co nhieu san pham => dung de truy van nhung san pham cung category
    public function products() {
        return $this->hasMany(Product::class, 'category_id', 'id')->orderBy('id', 'DESC');
    }
}
