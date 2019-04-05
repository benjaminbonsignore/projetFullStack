<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

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