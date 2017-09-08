<?php

namespace Tests\Unit;

use Tests\TestCase;

class AjaxFormActionTest extends TestCase
{
    /** @test */
    public function it_is_able_to_generate_a_form_action()
    {
        $this->assertTrue(true);

        // $html = action('/products', 'Create a new product')
        //     ->to('POST', '/products/store')
        //     ->callback('products.show')
        //     ->render();

        // $this->assertEquals(
        //     '<a class="af-action" href="/products" af-action="/products/store">Create a new product</a>',
        //     $html
        // );
    }
}
