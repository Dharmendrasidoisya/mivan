<?php

namespace Tests\Unit\Plugins\Products;

use Botble\Products\Http\Requests\CategoryRequest;
use Tests\Unit\Plugins\Shared\CategoryRequestTestCase;

class CategoryRequestTest extends CategoryRequestTestCase
{
    protected function requestClass(): string
    {
        return CategoryRequest::class;
    }

    protected function validatesImage(): bool
    {
        return true;
    }

    public function test_it_rejects_an_image_that_does_not_exist(): void
    {
        $this->assertContains('image', $this->errorKeys($this->validCategory(['image' => 'missing/image.jpg'])));
    }
}
