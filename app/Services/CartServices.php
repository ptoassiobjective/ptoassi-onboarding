<?php

namespace App\Services;

use App\Models\Cart;
use App\Models\CartProducts;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class CartServices {

    private $correiosServices;

    public function __construct(CorreiosServices $correiosServices) {
        $this->correiosServices = $correiosServices;
    }

    public function listProducts(Cart $cart): Collection {

        $products = CartProducts::query()
            ->join('products', 'cart_products.product_id', '=', 'products.id')
            ->where('cart_id', $cart->id)
            ->get();

        return $products;
    }

    public function total(Cart $cart): float {

        $products = CartProducts::query()
            ->join('products', 'cart_products.product_id', '=', 'products.id')
            ->where('cart_id', $cart->id)
            ->get();

        $total = 0;
        foreach ($products as $product) {
            $total += $product->price * $product->amount;
        }
        if ($total < 100 && count($products) > 0) {
            $cep = $cart->user()->first()->cep;
            $total += $this->correiosServices->getValor($cep);
        }

        return $total;
    }

    public function addProductCart(Cart $cart, Product $product, int $quantidade): void {

        if ($quantidade < 1) {
            return;
        }
        $cartProducts = new CartProducts();
        $existProduct = $cartProducts->query()
            ->where('cart_id', $cart->id)
            ->where('product_id', $product->id)
            ->first();
        if (empty($existProduct)) {
            $cartProducts->product_id = $product->id;
            $cartProducts->cart_id = $cart->id;
            $cartProducts->amount = $quantidade;
            $cartProducts->save();
        } else {
            $existProduct->amount += $quantidade;
            $existProduct->save();
        }

    }

    public function removeProductCart(Cart $cart, Product $product, $quantidade = null): void {

        $cartProducts = new CartProducts();
        $existProduct = $cartProducts->query()
            ->where('cart_id', $cart->id)
            ->where('product_id', $product->id)
            ->first();
        if (!empty($existProduct)) {
            if (is_null($quantidade) || ($existProduct->amount - $quantidade) < 1) {
                $existProduct->delete();
            } else {
                $existProduct->amount -= $quantidade;
                $existProduct->save();
            }
        }

    }
}
