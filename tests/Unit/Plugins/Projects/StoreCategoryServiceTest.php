<?php

namespace Tests\Unit\Plugins\Projects;

use Botble\Projects\Models\Post;
use Botble\Projects\Projects\Abstracts\StoreCategoryServiceAbstract;
use Botble\Projects\Projects\StoreCategoryService;
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
        return 'projectscategories';
    }
}
