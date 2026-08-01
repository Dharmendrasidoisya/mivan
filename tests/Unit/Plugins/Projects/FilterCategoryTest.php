<?php

namespace Tests\Unit\Plugins\Projects;

use Botble\Projects\Supports\FilterCategory;
use Tests\Unit\Plugins\Shared\FilterCategoryTestCase;

class FilterCategoryTest extends FilterCategoryTestCase
{
    protected function filterClass(): string
    {
        return FilterCategory::class;
    }
}
