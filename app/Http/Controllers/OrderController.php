<?php

namespace App\Http\Controllers;

use App\Models\BillingAddress;
use App\Models\OrderedItem;
use App\Models\Orders;
use App\Models\Product;
use App\Models\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    //

    public function checkout()
    {
        $shoppingCart = Session::has('cart') ? Session::get('cart') : null;
        if ($shoppingCart) {
            return view('checkout')->with(compact('shoppingCart'));
        } else {
            return redirect('/view-cart');
        }
    }


    public function placeOrder(Request $request)
    {
        $shoppingCart = Session::has('cart') ? Session::get('cart') : null;
        if ($shoppingCart) {
            $order = new Orders();
            $order->customerName = $request->customerName;
            $order->customerEmail = $request->customerEmail;
            $order->phone = $request->phone;
            $order->gst = $request->gst;
            $order->totalQuantity = $shoppingCart['totalQty'];
            $order->totalAmountBeforeTax = $shoppingCart['grandTotal'];
            $totalTaxAmount = round($shoppingCart['grandTotal'] * 0.18);
            $order->totalTax = $totalTaxAmount;
            $order->totalAmountAfterTax = $shoppingCart['grandTotal'] + $totalTaxAmount;
            $order->order_date = now();
            $order->order_status = "Created";
            $order->save();

            $shippingAddress = new ShippingAddress();
            $shippingAddress->streetAddress = $request->shipping_street;
            $shippingAddress->city = $request->shipping_city;
            $shippingAddress->zipcode = $request->shipping_zipcode;
            $shippingAddress->state = $request->shipping_state;
            $shippingAddress->country = $request->shipping_country;
            $shippingAddress->order_id = $order->order_id;
            $shippingAddress->save();

            $billingAddress = new BillingAddress();
            $billingAddress->streetAddress = $request->billing_street;
            $billingAddress->city = $request->billing_city;
            $billingAddress->zipcode = $request->billing_zipcode;
            $billingAddress->state = $request->billing_state;
            $billingAddress->country = $request->billing_country;
            $billingAddress->order_id = $order->order_id;
            $billingAddress->save();
            $itemsOrdered = [];

            foreach ($shoppingCart['cartItems'] as $c) {

                $orderedItem = new OrderedItem();
                $orderedItem->quantityRequested = $c['quantity'];
                $orderedItem->price = $c['price'];
                $orderedItem->totalAmount = $c['subTotal'];
                $orderedItem->product_id = $c['product']['product_id'];
                $orderedItem->order_id = $order->order_id;
                $orderedItem->save();

                $product = Product::findOrFail($c['product']['product_id']);
                $product->stock -= $orderedItem->quantityRequested;
                if ($product->stock <= 0) {
                    $product->activeStatus = 0;
                }
                $product->save();
                array_push($itemsOrdered, $orderedItem);
            }

            $data = [
                'Order Details' => $order,
                'Shipping Details' => $shippingAddress,
                'BillingDetails' => $billingAddress,
                'Items Ordered' => $itemsOrdered
            ];

            Session::forget('cart');
            return response()->json($data);
        } else {
            return redirect('/view-cart');
        }
    }
}
