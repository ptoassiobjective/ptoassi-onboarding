<?php

namespace Tests\Unit\Services;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use App\Services\CartServices;
use App\Services\CorreiosServices;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CorreiosServicesTest extends TestCase {

    use DatabaseTransactions;

    /**
     * test mock Cart and Correios
     *
     * @return void
     */
    public function testSumTotalProducts(): void {

        $user = User::factory()->create();
        $product = Product::factory()->create([
            'price' => '0'
        ]);
        $cart = Cart::factory()->create([
            'user_id' => $user->id
        ]);

        $correiosService = $this->getMockBuilder(CorreiosServices::class)
            ->setMethods(['getValor'])
            ->getMock();
        $correiosService->expects($this->once())
            ->method('getValor')
            ->with($this->stringContains('82710150'))
            ->willReturn(floatval(50));
        $cartService = new CartServices($correiosService);

        $cartService->addProductCart($cart, $product, 1);

        $return = $cartService->total($cart);

        $expect = '50';
        $this->assertEquals($expect, $return);
    }

    /**
     * test mock Cart and Correios grater 100
     *
     * @return void
     */
    public function testIfGreater100(): void {
        $user = User::factory()->create();
        $product = Product::factory()->create([
            'price' => '100'
        ]);
        $cart = Cart::factory()->create([
            'user_id' => $user->id
        ]);

        $correiosService = $this->getMockBuilder(CorreiosServices::class)
            ->setMethods(['getValor'])
            ->getMock();
        $correiosService->expects($this->never())
            ->method('getValor')
            ->with($this->stringContains('82710150'));
        $cartService = new CartServices($correiosService);

        $cartService->addProductCart($cart, $product, 1);
        $return = $cartService->total($cart);

        $expect = '100';
        $this->assertEquals($expect, $return);
    }

    /**
     * test mock Cart and Correios Lower 100
     *
     * @return void
     */
    public function testIfLower100(): void {
        $user = User::factory()->create();
        $product = Product::factory()->create([
            'price' => '50'
        ]);
        $cart = Cart::factory()->create([
            'user_id' => $user->id
        ]);

        $correiosService = $this->getMockBuilder(CorreiosServices::class)
            ->setMethods(['getValor'])
            ->getMock();
        $correiosService->expects($this->once())
            ->method('getValor')
            ->with($this->stringContains('82710150'))
            ->willReturn(floatval(50));
        $cartService = new CartServices($correiosService);

        $cartService->addProductCart($cart, $product, 1);
        $return = $cartService->total($cart);

        $expect = '100';
        $this->assertEquals($expect, $return);
    }

}
