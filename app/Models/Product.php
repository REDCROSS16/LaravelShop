<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function getCategory()
    {
        /* еще можно $category = Category::find($this->category_id); */
        return Category::where('id', $this->category_id)->first();
    }

    public function category()
    {
       return $this->belongsTo(Category::class);
    }
}
