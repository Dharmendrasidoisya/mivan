<?php

namespace Tests\Unit\Plugins\Products;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Products\Supports\FilterPost;
use PHPUnit\Framework\TestCase;

class FilterPostTest extends TestCase
{
    public function test_it_returns_default_filters_for_an_empty_request(): void
    {
        $this->assertSame([
            'page' => 1,
            'per_page' => 10,
            'search' => null,
            'author' => null,
            'author_exclude' => null,
            'exclude' => null,
            'include' => null,
            'after' => null,
            'before' => null,
            'order' => 'desc',
            'order_by' => 'updated_at',
            'status' => BaseStatusEnum::PUBLISHED,
            'productscategories' => null,
            'productscategories_exclude' => null,
            'productstags' => null,
            'productstags_exclude' => null,
            'featured' => null,
        ], FilterPost::setFilters([]));
    }

    public function test_it_keeps_provided_values(): void
    {
        $filters = FilterPost::setFilters([
            'page' => 3,
            'per_page' => 25,
            'search' => 'chair',
            'author' => 7,
            'author_exclude' => 8,
            'exclude' => [1, 2],
            'include' => [3],
            'after' => '2023-01-01',
            'before' => '2023-12-31',
            'order' => 'asc',
            'order_by' => 'created_at',
            'productscategories' => [4],
            'productscategories_exclude' => [5],
            'productstags' => [6],
            'productstags_exclude' => [9],
            'featured' => true,
        ]);

        $this->assertSame(3, $filters['page']);
        $this->assertSame(25, $filters['per_page']);
        $this->assertSame('chair', $filters['search']);
        $this->assertSame(7, $filters['author']);
        $this->assertSame(8, $filters['author_exclude']);
        $this->assertSame([1, 2], $filters['exclude']);
        $this->assertSame([3], $filters['include']);
        $this->assertSame('2023-01-01', $filters['after']);
        $this->assertSame('2023-12-31', $filters['before']);
        $this->assertSame('asc', $filters['order']);
        $this->assertSame('created_at', $filters['order_by']);
        $this->assertSame([4], $filters['productscategories']);
        $this->assertSame([5], $filters['productscategories_exclude']);
        $this->assertSame([6], $filters['productstags']);
        $this->assertSame([9], $filters['productstags_exclude']);
        $this->assertTrue($filters['featured']);
    }

    public function test_it_lowercases_the_order_direction(): void
    {
        $this->assertSame('asc', FilterPost::setFilters(['order' => 'ASC'])['order']);
        $this->assertSame('desc', FilterPost::setFilters(['order' => 'DeSc'])['order']);
    }

    public function test_it_falls_back_to_desc_for_an_unknown_order_direction(): void
    {
        $this->assertSame('desc', FilterPost::setFilters(['order' => 'sideways'])['order']);
    }

    public function test_it_always_filters_on_published_posts(): void
    {
        $filters = FilterPost::setFilters(['status' => BaseStatusEnum::DRAFT]);

        $this->assertSame(BaseStatusEnum::PUBLISHED, $filters['status']);
    }
}
