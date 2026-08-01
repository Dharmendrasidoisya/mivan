<?php

namespace Tests\Unit\Plugins\Shared;

use Botble\Base\Enums\BaseStatusEnum;
use Tests\TestCase;

/**
 * Shared expectations for the identical `PostRequest` of the products and projects plugins.
 */
abstract class PostRequestTestCase extends TestCase
{
    use RestoresPostFormats;
    use ValidatesRequestRules;

    /**
     * Name of the categories attribute, e.g. `productscategories`.
     */
    abstract protected function categoriesField(): string;

    protected function setUp(): void
    {
        parent::setUp();

        $this->rememberPostFormats();
    }

    protected function tearDown(): void
    {
        $this->restorePostFormats();

        parent::tearDown();
    }

    private function validPost(array $overrides = []): array
    {
        return array_merge([
            'name' => 'Oak dining table',
            'description' => 'A solid oak dining table.',
            'content' => '<p>A solid oak dining table.</p>',
            'stag' => null,
            'status' => BaseStatusEnum::PUBLISHED,
            'is_featured' => 1,
            'image' => null,
        ], $overrides);
    }

    public function test_it_accepts_a_valid_post(): void
    {
        $this->assertTrue($this->validate($this->validPost())->passes());
    }

    public function test_it_requires_a_name(): void
    {
        $this->assertContains('name', $this->errorKeys($this->validPost(['name' => null])));
    }

    public function test_it_limits_the_length_of_the_text_fields(): void
    {
        $this->assertSame(['name', 'description', 'content', 'stag'], $this->errorKeys($this->validPost([
            'name' => str_repeat('a', 251),
            'description' => str_repeat('b', 401),
            'content' => str_repeat('c', 300001),
            'stag' => str_repeat('d', 256),
        ])));
    }

    public function test_it_rejects_an_unknown_status(): void
    {
        $this->assertContains('status', $this->errorKeys($this->validPost(['status' => 'archived'])));
    }

    public function test_it_requires_categories_to_be_an_array(): void
    {
        $this->assertContains(
            $this->categoriesField(),
            $this->errorKeys($this->validPost([$this->categoriesField() => 'one']))
        );
    }

    public function test_it_does_not_validate_the_format_type_when_only_the_default_format_exists(): void
    {
        $this->keepOnlyTheDefaultPostFormat();

        $this->assertArrayNotHasKey('format_type', $this->rules());
    }

    public function test_it_validates_the_format_type_against_the_registered_formats(): void
    {
        $this->registerVideoFormat();

        $this->assertArrayHasKey('format_type', $this->rules());
        $this->assertTrue($this->validate($this->validPost(['format_type' => 'video']))->passes());
        $this->assertContains('format_type', $this->errorKeys($this->validPost(['format_type' => 'audio'])));
    }
}
