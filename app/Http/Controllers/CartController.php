<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    //
    public function addToCart(Request $request)
    {
        $product = Product::findOrFail($request['product_id']);

        $singleCartItem = [
            'cart_id' => $product->product_id,
            'quantity' => $request->quantityRequested,
            'subTotal' => $request->quantityRequested * $product->ourPrice,
            'price' => $product->ourPrice,
            'product' => $product
        ];
        $shoppingCart = Session::has('cart') ? Session::get('cart') : null;

        if ($shoppingCart) {
            if (array_key_exists($singleCartItem['cart_id'], $shoppingCart['cartItems'])) {
                $shoppingCart['cartItems'][$singleCartItem['cart_id']]['quantity'] += $singleCartItem['quantity'];
                $shoppingCart['cartItems'][$singleCartItem['cart_id']]['subTotal'] += $singleCartItem['quantity'] * $singleCartItem['price'];
            } else {
                $shoppingCart['cartItems'][$singleCartItem['cart_id']] = $singleCartItem;
            }
        } else {
            $shoppingCart = [
                'cartItems' => [],
                'totalQty' => 0,
                'grandTotal' => 0
            ];
            $shoppingCart['cartItems'][$singleCartItem['cart_id']] = $singleCartItem;
        }

        $shoppingCart['totalQty'] += $singleCartItem['quantity'];
        $shoppingCart['grandTotal'] += $singleCartItem['subTotal'];
        session()->put('cart', $shoppingCart);

        // Update cart item count in session
        $this->updateCartCount();
        return redirect()->back()->with('success', 'Product added to cart!');;
    }

    public function updateCartCount()
    {
        $cart = Session::has('cart') ? Session::get('cart') : null;
        $cartCount = 0;
        if ($cart) {
            $cartCount = $cart['totalQty'];
        } else {
            $cartCount = 0;
        }
        session()->put('cart_count', $cartCount);
    }

    public function viewCart()
    {
        $cart = Session::has('cart') ? Session::get('cart') : null;
        $products = Product::with('Category')->where('activeStatus', 1)->get();
        if ($cart) {
            foreach ($cart['cartItems'] as $c) {
                if ($c['quantity'] <= 0) {
                    unset($cart['cartItems'][$c['cart_id']]);
                }
            }
            if ($cart['totalQty'] <= 0) {
                Session::forget($cart);
            } else {
                Session::put($cart);
            }
        }
        $this->updateCartCount();
        return view('cart')->with(compact('cart', 'products'));
    }

    public function deleteCartItem($id)
    {
        $shoppingCart = Session::get('cart');
        $shoppingCart['totalQty'] -= $shoppingCart['cartItems'][$id]['quantity'];
        $shoppingCart['grandTotal'] -= $shoppingCart['cartItems'][$id]['subTotal'];
        unset($shoppingCart['cartItems'][$id]);
        if ($shoppingCart['totalQty'] <= 0) {
            Session::forget('cart');
        } else {
            Session::put('cart', $shoppingCart);
        }

        $this->updateCartCount();
        return redirect()->back();
    }

    public function updateCartItem(Request $request)
    {
        $shoppingCart = Session::has('cart') ? Session::get('cart') : null;
        if ($shoppingCart) {
            $oldItemSubTotal = $shoppingCart['cartItems'][$request->cart_id]['subTotal'];
            $shoppingCart['grandTotal'] -= $oldItemSubTotal;
            $oldItemQuantity = $shoppingCart['cartItems'][$request->cart_id]['quantity'];
            $shoppingCart['totalQty'] -= $oldItemQuantity;
            $shoppingCart['cartItems'][$request->cart_id]['quantity'] = $request->cartItemQuantityRequested;
            $shoppingCart['cartItems'][$request->cart_id]['subTotal'] = $request->cartItemQuantityRequested * $shoppingCart['cartItems'][$request->cart_id]['product']['ourPrice'];
            $shoppingCart['grandTotal'] += $shoppingCart['cartItems'][$request->cart_id]['subTotal'];
            $shoppingCart['totalQty'] += $shoppingCart['cartItems'][$request->cart_id]['quantity'];
            Session::put('cart', $shoppingCart);
        }

        $this->updateCartCount();
        return redirect()->back();
    }
}
