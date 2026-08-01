<?php

namespace Tests\Unit\Plugins\Products;

use Botble\Products\Supports\FilterCategory;
use Tests\Unit\Plugins\Shared\FilterCategoryTestCase;

class FilterCategoryTest extends FilterCategoryTestCase
{
    protected function filterClass(): string
    {
        return FilterCategory::class;
    }
}
