<?php

namespace Tests\Unit\Plugins\Products;

use Botble\Products\Supports\FilterCategory;
use PHPUnit\Framework\TestCase;

class FilterCategoryTest extends TestCase
{
    public function test_it_returns_default_filters_for_an_empty_request(): void
    {
        $this->assertSame([
            'page' => 1,
            'per_page' => 10,
            'search' => null,
            'exclude' => null,
            'include' => null,
            'order' => 'desc',
            'order_by' => 'name',
            'hide_empty' => null,
            'parent' => null,
            'post' => null,
            'slug' => null,
        ], FilterCategory::setFilters([]));
    }

    public function test_it_keeps_provided_values(): void
    {
        $filters = FilterCategory::setFilters([
            'page' => 2,
            'per_page' => 50,
            'search' => 'sofa',
            'exclude' => [1],
            'include' => [2],
            'order' => 'asc',
            'order_by' => 'created_at',
            'parent' => 4,
            'post' => 5,
            'slug' => 'living-room',
        ]);

        $this->assertSame(2, $filters['page']);
        $this->assertSame(50, $filters['per_page']);
        $this->assertSame('sofa', $filters['search']);
        $this->assertSame([1], $filters['exclude']);
        $this->assertSame([2], $filters['include']);
        $this->assertSame('asc', $filters['order']);
        $this->assertSame('created_at', $filters['order_by']);
        $this->assertSame(4, $filters['parent']);
        $this->assertSame(5, $filters['post']);
        $this->assertSame('living-room', $filters['slug']);
    }

    public function test_hide_empty_mirrors_the_include_value(): void
    {
        $filters = FilterCategory::setFilters(['include' => [2, 3]]);

        $this->assertSame([2, 3], $filters['hide_empty']);
    }
}
