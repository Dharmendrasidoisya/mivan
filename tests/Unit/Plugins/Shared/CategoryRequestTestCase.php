<?php

namespace Tests\Unit\Plugins\Shared;

use Botble\Base\Enums\BaseStatusEnum;
use Tests\TestCase;

/**
 * Shared expectations for the `CategoryRequest` of the products and projects plugins.
 */
abstract class CategoryRequestTestCase extends TestCase
{
    use ValidatesRequestRules;

    /**
     * Whether the plugin also validates an `image` attribute.
     */
    protected function validatesImage(): bool
    {
        return false;
    }

    protected function validCategory(array $overrides = []): array
    {
        $category = [
            'name' => 'Living room',
            'description' => 'Sofas, tables and more.',
            'shortdescription' => 'Sofas and tables.',
            'status' => BaseStatusEnum::PUBLISHED,
            'is_default' => 0,
            'is_featured' => 1,
        ];

        if ($this->validatesImage()) {
            $category['image'] = null;
        }

        return array_merge($category, $overrides);
    }

    public function test_it_accepts_a_valid_category(): void
    {
        $this->assertTrue($this->validate($this->validCategory())->passes());
    }

    public function test_it_requires_a_name(): void
    {
        $this->assertContains('name', $this->errorKeys($this->validCategory(['name' => null])));
    }

    public function test_it_limits_the_length_of_the_name_and_the_short_description(): void
    {
        $this->assertSame(['name', 'shortdescription'], $this->errorKeys($this->validCategory([
            'name' => str_repeat('a', 121),
            'shortdescription' => str_repeat('b', 401),
        ])));
    }

    public function test_it_allows_a_long_description(): void
    {
        $this->assertTrue($this->validate($this->validCategory(['description' => str_repeat('c', 5000)]))->passes());
    }

    public function test_it_rejects_an_unknown_status(): void
    {
        $this->assertContains('status', $this->errorKeys($this->validCategory(['status' => 'archived'])));
    }

    public function test_the_flags_only_accept_on_off_values(): void
    {
        foreach (['is_default', 'is_featured'] as $flag) {
            $this->assertTrue(
                $this->validate($this->validCategory([$flag => 2]))->fails(),
                sprintf('Expected [%s] to reject a value outside of 0/1.', $flag)
            );

            $this->assertTrue(
                $this->validate($this->validCategory([$flag => null]))->fails(),
                sprintf('Expected [%s] to reject a null value.', $flag)
            );
        }
    }
}
