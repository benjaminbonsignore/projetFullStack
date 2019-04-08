<?php

namespace Tests\Feature;

use App\Product;
use Tests\TestCase;

class ShowProductsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    function works()
    {
      $products = factory(Product::class, 3)->create();
      
      $this->get('/')->assertSuccessful()
      ->assertViewIs('products.index');
      ->assertViewHas('produts', $products);
        
    }