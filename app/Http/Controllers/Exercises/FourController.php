<?php

namespace App\Http\Controllers\Exercises;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use App\Services\CartServices;
use App\Services\CorreiosServices;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class FourController extends BaseController {

    public function exerciseFour() {

        $correiosService = new CorreiosServices();
        $cartService = new CartServices($correiosService);

        $products = Product::query()->limit(2)->get();

        $user = User::query()->first();
        $auth = Auth::attempt(['email' => $user->email, 'password' => 'password']);

        $cart = Cart::query()->where('user_id', $user->id)->first();
        if ($auth) {
            if (!$cart) {
                $cart = new Cart();
                $cart->user_id = $user->id;
                $cart->save();

                foreach ($products as $product) {
                    $cartService->addProductCart($cart, $product, rand(1, 10));
                }
            }
        }

        $cartTotal = $cartService->total($cart);
        $cartProducts = $cartService->listProducts($cart);

        return view('exercises/four', ['products' => $products, 'cart' => $cartProducts, 'cartTotal' => $cartTotal]);
    }
}
