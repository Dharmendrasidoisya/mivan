<?php

namespace Tests\Unit\Plugins\Projects;

use Botble\Projects\Models\Post;
use Botble\Projects\Projects\Abstracts\StoreCategoryServiceAbstract;
use Botble\Projects\Projects\StoreCategoryService;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Http\Request;
use Mockery;
use Tests\TestCase;

class StoreCategoryServiceTest extends TestCase
{
    public function test_it_implements_the_store_category_contract(): void
    {
        $this->assertInstanceOf(StoreCategoryServiceAbstract::class, new StoreCategoryService());
    }

    public function test_it_syncs_the_submitted_categories(): void
    {
        $this->assertSyncedCategories(['projectscategories' => [1, 2]], [1, 2]);
    }

    public function test_it_syncs_an_empty_list_when_no_category_is_submitted(): void
    {
        $this->assertSyncedCategories([], []);
    }

    private function assertSyncedCategories(array $input, array $expected): void
    {
        $relation = Mockery::mock(BelongsToMany::class);
        $relation->shouldReceive('sync')->once()->with($expected);

        $post = Mockery::mock(Post::class);
        $post->shouldReceive('projectscategories')->once()->andReturn($relation);

        (new StoreCategoryService())->execute(new Request($input), $post);
    }
}
