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
        $cats = CategoriesModel::all();
        $orderId = session('orderId');

        if(is_null($orderId)){
            return redirect()->route('main-home');
        }
        $order = Order::findOrFail($orderId);
        return view('order', compact('cats', 'order'));
    }

    public function basketAdd($productId){
        $orderId = session('orderId');
        if (is_null($orderId)){
            $order = Order::create()->id;
            $idshka = $order;
            session(['orderId' => $idshka]);
            $order = Order::findOrFail($idshka);
        } else {
            $order = Order::findOrFail($orderId);
        }

        if($order->products->contains($productId)){
            $pivotRow = $order->products()->where('products_model_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else{
            $order->products()->attach($productId);
        }


        return redirect()->route('basket');
    }

    public function basketRemove($productId){

        $orderId = session('orderId');

        if(is_null($productId)){
            return redirect()->route('basket');
        }

        $order = Order::findOrFail($orderId);

        if($order->products->contains($productId)){
            $pivotRow = $order->products()->where('products_model_id', $productId)->first()->pivot;
            if($pivotRow->count < 2){
                $order->products()->detach($productId);
            } else{
                $pivotRow->count--;
                $pivotRow->update();
            }

        }

        return redirect()->route('basket');
    }

    public function basketConfirm(Request $request){

        $orderId = session('orderId');

        if(is_null($orderId)){
            return redirect()->route('home');
        }
        $order = Order::findOrFail($orderId);
        $order->name = $request->name;
        $order->phone_number = $request->phone;
        $order->status = 1;
        $success = $order->save();

        if($success){
            session()->flash('success', 'Your order has been accepted for processing');
        } else{
            session()->flash('warning', 'There is some error');
        }

        session()->forget('orderId');

        return redirect()->route('main-home');
    }
}
