<?php

namespace Tests\Unit\Services;

use App\Models\Cart;
use App\Models\CartProducts;
use App\Models\Product;
use App\Models\User;
use App\Services\CartServices;
use App\Services\CorreiosServices;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CartServicesTest extends TestCase {

    use DatabaseTransactions;

    /**
     * test return sum of all products
     *
     * @return void
     */
    public function testSumTotalProducts(): void {

        $user = User::factory()->create();
        $products = Product::factory(2)->create([
            'price' => '2.55'
        ]);
        $cart = Cart::factory()->create([
            'user_id' => $user->id
        ]);
        foreach ($products as $product) {
            CartProducts::factory()->create([
                'amount' => '1',
                'cart_id' => $cart->id,
                'product_id' => $product->id
            ]);
        }

        $expect = '55.10';

        $cartService = new CartServices(new CorreiosServices());
        $total = $cartService->total($cart);

        $this->assertIsFloat($total);
        $this->assertEquals($expect, $total);
    }

    /**
     * test empty cart
     *
     * @return void
     */
    public function testSumOfEmpty(): void {

        $user = User::factory()->create();
        $cart = Cart::factory()->create([
            'user_id' => $user->id
        ]);
        $expect = 0;

        $cartService = new CartServices(new CorreiosServices());
        $total = $cartService->total($cart);

        $this->assertIsFloat($total);
        $this->assertEquals($expect, $total);
    }

    /**
     * test sum cart
     *
     * @return void
     */
    public function testSumAferAdd(): void {

        $cartService = new CartServices(new CorreiosServices());

        $user = User::factory()->create();
        $products = Product::factory(2)->create([
            'price' => '10'
        ]);
        $cart = Cart::factory()->create([
            'user_id' => $user->id
        ]);
        foreach ($products as $product) {
            $cartService->addProductCart($cart, $product, 1);
        }
        $expect = '70';

        $total = $cartService->total($cart);
        $this->assertEquals($expect, $total);

        $products = Product::factory(2)->create([
            'price' => '10'
        ]);

        foreach ($products as $product) {
            $cartService->addProductCart($cart, $product, 1);
        }
        $expect = '90';

        $total = $cartService->total($cart);
        $totalProducts = CartProducts::query()->where('cart_id', $cart->id)->get();

        $this->assertCount(4, $totalProducts);
        $this->assertIsFloat($total);
        $this->assertEquals($expect, $total);
    }

    /**
     * test add cart
     *
     * @return void
     */
    public function testSumAddSameProducts(): void {

        $cartService = new CartServices(new CorreiosServices());

        $user = User::factory()->create();
        $products = Product::factory(2)->create([
            'price' => '10'
        ]);
        $cart = Cart::factory()->create([
            'user_id' => $user->id
        ]);
        foreach ($products as $product) {
            $cartService->addProductCart($cart, $product, 1);
        }
        $expect = '70';

        $total = $cartService->total($cart);
        $this->assertEquals($expect, $total);

        foreach ($products as $product) {
            $cartService->addProductCart($cart, $product, 1);
        }
        $expect = '90';

        $total = $cartService->total($cart);
        $totalProducts = CartProducts::query()->where('cart_id', $cart->id)->get();

        $this->assertCount(2, $totalProducts);
        $this->assertIsFloat($total);
        $this->assertEquals($expect, $total);
    }

    /**
     * test remove product cart
     *
     * @return void
     */
    public function testSumRemoveProducts(): void {

        $cartService = new CartServices(new CorreiosServices());

        $user = User::factory()->create();
        $products = Product::factory(2)->create([
            'price' => '10'
        ]);
        $cart = Cart::factory()->create([
            'user_id' => $user->id
        ]);
        foreach ($products as $product) {
            $cartService->addProductCart($cart, $product, 1);
        }
        foreach ($products as $product) {
            $cartService->removeProductCart($cart, $product);
        }
        $expect = '0';
        $total = $cartService->total($cart);
        $totalProducts = CartProducts::query()->where('cart_id', $cart->id)->get();

        $this->assertCount(0, $totalProducts);
        $this->assertIsFloat($total);
        $this->assertEquals($expect, $total);
    }

    /**
     * test remove product cart
     *
     * @return void
     */
    public function testSumRemove2Products(): void {

        $cartService = new CartServices(new CorreiosServices());

        $user = User::factory()->create();
        $products = Product::factory(2)->create([
            'price' => '10'
        ]);
        $cart = Cart::factory()->create([
            'user_id' => $user->id
        ]);
        foreach ($products as $product) {
            $cartService->addProductCart($cart, $product, 2);
        }
        foreach ($products as $product) {
            $cartService->removeProductCart($cart, $product, 1);
        }
        $expect = '70';
        $total = $cartService->total($cart);
        $totalProducts = CartProducts::query()->where('cart_id', $cart->id)->get();

        $this->assertCount(2, $totalProducts);
        $this->assertIsFloat($total);
        $this->assertEquals($expect, $total);
    }

    /**
     * test remove product cart
     *
     * @return void
     */
    public function testSumRemove6Products(): void {

        $cartService = new CartServices(new CorreiosServices());

        $user = User::factory()->create();
        $products = Product::factory(2)->create([
            'price' => '10'
        ]);
        $cart = Cart::factory()->create([
            'user_id' => $user->id
        ]);
        foreach ($products as $product) {
            $cartService->addProductCart($cart, $product, 2);
        }
        foreach ($products as $product) {
            $cartService->removeProductCart($cart, $product, 3);
        }
        $expect = '0';
        $total = $cartService->total($cart);
        $totalProducts = CartProducts::query()->where('cart_id', $cart->id)->get();

        $this->assertCount(0, $totalProducts);
        $this->assertIsFloat($total);
        $this->assertEquals($expect, $total);
    }

    /** test add cart */
    public function testAddCart(): void {
        $cartService = new CartServices(new CorreiosServices());

        $user = User::factory()->create();
        $product = Product::factory()->create();
        $cart = Cart::factory()->create([
            'user_id' => $user->id
        ]);
        $cartService->addProductCart($cart, $product, 1);
        $totalProducts = CartProducts::query()->where('cart_id', $cart->id)->get();

        $this->assertCount(1, $totalProducts);
    }

    /** test add cart */
    public function testAddEmptyCart(): void {
        $cartService = new CartServices(new CorreiosServices());

        $user = User::factory()->create();
        $product = Product::factory()->create();
        $cart = Cart::factory()->create([
            'user_id' => $user->id
        ]);
        $cartService->addProductCart($cart, $product, 0);
        $totalProducts = CartProducts::query()->where('cart_id', $cart->id)->get();

        $this->assertCount(0, $totalProducts);
    }

    /** test remove cart */
    public function testRemoveCart(): void {
        $cartService = new CartServices(new CorreiosServices());

        $user = User::factory()->create();
        $product = Product::factory()->create();
        $cart = Cart::factory()->create([
            'user_id' => $user->id
        ]);
        $cartService->addProductCart($cart, $product, 1);
        $cartService->removeProductCart($cart, $product, 1);
        $totalProducts = CartProducts::query()->where('cart_id', $cart->id)->get();

        $this->assertCount(0, $totalProducts);
    }

    /** test remove cart */
    public function testRemoveEmptyCart(): void {
        $cartService = new CartServices(new CorreiosServices());

        $user = User::factory()->create();
        $product = Product::factory()->create();
        $cart = Cart::factory()->create([
            'user_id' => $user->id
        ]);
        $cartService->removeProductCart($cart, $product);
        $totalProducts = CartProducts::query()->where('cart_id', $cart->id)->get();

        $this->assertCount(0, $totalProducts);
    }
}
