<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CategoriesModel;
use App\Models\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket(){

        $orderId = session('orderId');
        if(!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        } else{
            $order = null;
        }
        $cats = CategoriesModel::all();

        return view('basket', compact('order', 'cats'));
    }

    public function basketPlace(){
        return view('order');
    }

    public function basketAdd($productId){
        $orderId = session('orderId');
        if (is_null($orderId)){
            $order = Order::create()->id;
            //dd($order);
            $idshka = $order;
            session(['orderId' => $idshka]);
            $order = Order::findOrFail($idshka);
        } else {
            $order = Order::findOrFail($orderId);
        }

        $order->products()->attach($productId);
        $cats = CategoriesModel::all();

        return view('basket', compact('order', 'cats'));
    }
}
