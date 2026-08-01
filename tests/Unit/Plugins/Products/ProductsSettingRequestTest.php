<?php

namespace Tests\Unit\Plugins\Products;

use Botble\Products\Http\Requests\Settings\ProductsSettingRequest;
use Tests\Unit\Plugins\Shared\PostSchemaSettingRequestTestCase;

class ProductsSettingRequestTest extends PostSchemaSettingRequestTestCase
{
    protected function requestClass(): string
    {
        return ProductsSettingRequest::class;
    }

    protected function settingPrefix(): string
    {
        return 'products';
    }
}
