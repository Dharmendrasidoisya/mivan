<?php

namespace Tests\Unit\Plugins\Shared;

use Botble\Base\Enums\BaseStatusEnum;
use Tests\TestCase;

/**
 * Shared expectations for the identical `TagRequest` of the products and projects plugins.
 */
abstract class TagRequestTestCase extends TestCase
{
    use ValidatesRequestRules;

    public function test_it_accepts_a_valid_tag(): void
    {
        $this->assertTrue($this->validate([
            'name' => 'Chairs',
            'description' => 'Everything to sit on.',
            'status' => BaseStatusEnum::PUBLISHED,
        ])->passes());
    }

    public function test_it_requires_a_name(): void
    {
        $this->assertContains('name', $this->errorKeys(['name' => '']));
    }

    public function test_it_limits_the_length_of_the_name_and_the_description(): void
    {
        $this->assertSame(['name', 'description'], $this->errorKeys([
            'name' => str_repeat('a', 121),
            'description' => str_repeat('b', 401),
        ]));
    }

    public function test_it_rejects_an_unknown_status(): void
    {
        $this->assertContains('status', $this->errorKeys(['name' => 'Chairs', 'status' => 'unknown']));
    }
}
