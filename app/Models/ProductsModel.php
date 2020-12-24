<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    public $timestamps = false;
    use HasFactory;

    /*public function getCategory(){

        return $category = CategoriesModel::find($this->category_id);

    }*/

    public function category(){

        return $category = CategoriesModel::where('id', $this->category_id)->get();
        //return $this->belongsTo(CategoriesModel::class);
    }

    public function getPriceForCount(){
        if(!is_null($this->pivot)){
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }
}
