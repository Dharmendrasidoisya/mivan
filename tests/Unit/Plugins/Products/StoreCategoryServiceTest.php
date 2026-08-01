<?php

namespace Tests\Unit\Plugins\Products;

use Botble\Products\Models\Post;
use Botble\Products\Products\Abstracts\StoreCategoryServiceAbstract;
use Botble\Products\Products\StoreCategoryService;
use Tests\Unit\Plugins\Shared\StoreCategoryServiceTestCase;

class StoreCategoryServiceTest extends StoreCategoryServiceTestCase
{
    protected function serviceClass(): string
    {
        return StoreCategoryService::class;
    }

    protected function serviceContract(): string
    {
        return StoreCategoryServiceAbstract::class;
    }

    protected function postClass(): string
    {
        return Post::class;
    }

    protected function categoriesField(): string
    {
        return 'productscategories';
    }
}
