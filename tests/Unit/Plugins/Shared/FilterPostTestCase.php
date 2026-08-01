<?php

namespace Tests\Unit\Plugins\Shared;

use Botble\Base\Enums\BaseStatusEnum;
use PHPUnit\Framework\TestCase;

/**
 * Shared expectations for the identical `FilterPost` supports of the products and projects plugins.
 */
abstract class FilterPostTestCase extends TestCase
{
    /**
     * Fully qualified name of the plugin `Supports\FilterPost` class under test.
     */
    abstract protected function filterClass(): string;

    /**
     * Prefix of the taxonomy keys, e.g. `products` for `productscategories`.
     */
    abstract protected function taxonomyPrefix(): string;

    private function setFilters(array $request): array
    {
        return $this->filterClass()::setFilters($request);
    }

    private function key(string $suffix): string
    {
        return $this->taxonomyPrefix().$suffix;
    }

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
            $this->key('categories') => null,
            $this->key('categories_exclude') => null,
            $this->key('tags') => null,
            $this->key('tags_exclude') => null,
            'featured' => null,
        ], $this->setFilters([]));
    }

    public function test_it_keeps_provided_values(): void
    {
        $filters = $this->setFilters([
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
            $this->key('categories') => [4],
            $this->key('categories_exclude') => [5],
            $this->key('tags') => [6],
            $this->key('tags_exclude') => [9],
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
        $this->assertSame([4], $filters[$this->key('categories')]);
        $this->assertSame([5], $filters[$this->key('categories_exclude')]);
        $this->assertSame([6], $filters[$this->key('tags')]);
        $this->assertSame([9], $filters[$this->key('tags_exclude')]);
        $this->assertTrue($filters['featured']);
    }

    public function test_it_lowercases_the_order_direction(): void
    {
        $this->assertSame('asc', $this->setFilters(['order' => 'ASC'])['order']);
        $this->assertSame('desc', $this->setFilters(['order' => 'DeSc'])['order']);
    }

    public function test_it_falls_back_to_desc_for_an_unknown_order_direction(): void
    {
        $this->assertSame('desc', $this->setFilters(['order' => 'sideways'])['order']);
    }

    public function test_it_always_filters_on_published_posts(): void
    {
        $this->assertSame(BaseStatusEnum::PUBLISHED, $this->setFilters(['status' => BaseStatusEnum::DRAFT])['status']);
    }
}
