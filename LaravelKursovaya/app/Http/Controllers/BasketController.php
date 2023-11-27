<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class BasketController extends Controller
{
    public function basket(){
        $orderId = session('orderId');
        $order = $orderId ? Order::findOrFail($orderId) : new Order();
        if(!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        }

        return view('basket', compact('order'));
    }
    public function basketAdd($productId){
        $orderId = session('orderId');
        $order = Order::findOrNew($orderId);

        if(!$order->id){
            $order->save();
            session(['orderId' => $order->id]);
        }

        // if(is_null($orderId)){
        //     $order = Order::create()->id;
        //     session(['orderId' => $order->id]);
        // } else {
        //     $order = Order::find($orderId);
        // }
        if($order->products->contains($productId)){
           $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
           $pivotRow->count++;
           $pivotRow->update(); 

        } else {
            $order->products()->syncWithoutDetaching([$productId => ['count' => 1]]);
        }

        return redirect()->route('basket');

    }
    public function basketRemove($productId){
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);

        if($order->products->contains($productId)){
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if($pivotRow->count < 2){
                $order->products()->detach($productId);
            } else{
                $pivotRow->count--;
                $pivotRow->update(); 
            }
         }
        return redirect()->route('basket');
    }
}
