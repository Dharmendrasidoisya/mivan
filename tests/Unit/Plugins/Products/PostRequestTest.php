<?php

namespace Tests\Unit\Plugins\Products;

use Botble\Products\Http\Requests\PostRequest;
use Botble\Products\Supports\PostFormat;
use Tests\Unit\Plugins\Shared\PostRequestTestCase;

class PostRequestTest extends PostRequestTestCase
{
    protected function requestClass(): string
    {
        return PostRequest::class;
    }

    protected function postFormatClass(): string
    {
        return PostFormat::class;
    }

    protected function categoriesField(): string
    {
        return 'productscategories';
    }
}
