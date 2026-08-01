<?php

namespace Tests\Unit\Plugins\Shared;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Http\Request;
use Mockery;
use Tests\TestCase;

/**
 * Shared expectations for the identical `StoreCategoryService` of the products and projects plugins.
 */
abstract class StoreCategoryServiceTestCase extends TestCase
{
    /**
     * Fully qualified name of the plugin `StoreCategoryService`.
     */
    abstract protected function serviceClass(): string;

    /**
     * Fully qualified name of the abstract the service is expected to implement.
     */
    abstract protected function serviceContract(): string;

    /**
     * Fully qualified name of the plugin `Post` model.
     */
    abstract protected function postClass(): string;

    /**
     * Name of both the categories relation and the request attribute, e.g. `productscategories`.
     */
    abstract protected function categoriesField(): string;

    public function test_it_implements_the_store_category_contract(): void
    {
        $serviceClass = $this->serviceClass();

        $this->assertInstanceOf($this->serviceContract(), new $serviceClass());
    }

    public function test_it_syncs_the_submitted_categories(): void
    {
        $this->assertSyncedCategories([$this->categoriesField() => [1, 2]], [1, 2]);
    }

    public function test_it_syncs_an_empty_list_when_no_category_is_submitted(): void
    {
        $this->assertSyncedCategories([], []);
    }

    private function assertSyncedCategories(array $input, array $expected): void
    {
        $relation = Mockery::mock(BelongsToMany::class);
        $relation->shouldReceive('sync')->once()->with($expected);

        $post = Mockery::mock($this->postClass());
        $post->shouldReceive($this->categoriesField())->once()->andReturn($relation);

        $serviceClass = $this->serviceClass();

        (new $serviceClass())->execute(new Request($input), $post);
    }
}
