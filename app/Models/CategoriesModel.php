<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function products(){

        return $products = ProductsModel::where('category_id', $this->id)->get();
    }
}
