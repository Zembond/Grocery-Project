<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CategoriesModel;
use App\Models\Order;
use App\Models\ProductsModel;
use Illuminate\Http\Request;
use Illuminate\Tests\Integration\Database\EloquentHasManyThroughTest\Category;

class MainController extends Controller
{
    public function home(){
        $categories = CategoriesModel::get();
        $products = ProductsModel::paginate(9);
        //$products = new ProductsModel();
/*        $categories = new CategoriesModel();*/
        //return view('index', ['items' => $products->all(), 'cats' => $categories->all()]);
        return view('index', compact('categories', 'products'));
    }

    public function team(){

        return view('team');
    }

/*    public function admin(){
        $categories = new Category();
        return view('admin', ['cats' => $categories->all()]);
    }*/

    public function admin(){

        return view('admin');
    }

    public function category(){
        $categories = new CategoriesModel();
        return view('categories', ['cats' => $categories->all()]);
    }

    public function addCategory(Request $request){

        $cat = new CategoriesModel();
        $cat->name = $request->input('cat_name');
        $cat->description = $request->input('cat_description');

        $cat->save();

        return redirect()->route('admin');
    }

    public function products(){
        $products = new ProductsModel();
        return view('products', ['items' => $products->all()]);
    }

    public function addProduct(Request $request){

        $item = new ProductsModel();
        $item->name = $request->input('item_name');
        $item->description = $request->input('item_description');
        $item->picture_url = $request->input('item_picture');
        $item->price = $request->input('item_price');
        $item->nutrition = $request->input('item_nutrition');
        $item->category_id = $request->input('item_cat');

        $item->save();

        return redirect()->route('admin');
    }

    public function getProduct($id){

        $product = new ProductsModel();
        $categories = new CategoriesModel();

        return view('product', ['item' => $product->find($id), 'cats' => $categories->all()]);
    }

    public function getCategory($id){

        $category = new CategoriesModel();

        return view('categorydetails', ['cat' => $category->find($id)]);
    }

    public function editCat(Request $request){

        $cat = CategoriesModel::find($request->input('edit_category_id'));

        $cat->name = $request->input('edit_category_name');
        $cat->description = $request->input('edit_category_desc');

        $cat->save();

        return redirect()->route('admin');
    }

    public function getItem($id){

        $product = new ProductsModel();

        return view('productdetails', ['item' => $product->find($id)]);

    }

    public function editItem(Request $request){

        $item = ProductsModel::find($request->input('edit_item_id'));

        $item->name = $request->input('edit_item_name');
        $item->description = $request->input('edit_item_desc');
        $item->picture_url = $request->input('edit_item_picture');
        $item->price = $request->input('edit_item_price');
        $item->nutrition = $request->input('edit_item_nutrition');
        $item->category_id = $request->input('edit_item_cat');

        $item->save();

        return redirect()->route('admin');

    }

    public function categoryOne($code){

        $category = CategoriesModel::where('id', $code)->first();
        $cats = CategoriesModel::all();
        return view('category', compact('category', 'cats'));
    }

    public function orders(){
        $orders = Order::where('status', 1)->get();
        return view('orders', compact('orders'));
    }
}
