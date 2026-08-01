<?php

namespace Tests\Unit\Plugins\Products;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Products\Http\Requests\PostRequest;
use Botble\Products\Supports\PostFormat;
use Illuminate\Support\Facades\Validator;
use ReflectionProperty;
use Tests\TestCase;

class PostRequestTest extends TestCase
{
    private array $originalFormats;

    protected function setUp(): void
    {
        parent::setUp();

        $this->originalFormats = $this->formatsProperty()->getValue();
    }

    protected function tearDown(): void
    {
        $this->formatsProperty()->setValue(null, $this->originalFormats);

        parent::tearDown();
    }

    private function validate(array $data): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($data, (new PostRequest())->rules());
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
        $this->assertArrayHasKey('name', $this->validate($this->validPost(['name' => null]))->errors()->toArray());
    }

    public function test_it_limits_the_length_of_the_text_fields(): void
    {
        $errors = $this->validate($this->validPost([
            'name' => str_repeat('a', 251),
            'description' => str_repeat('b', 401),
            'content' => str_repeat('c', 300001),
            'stag' => str_repeat('d', 256),
        ]))->errors()->toArray();

        $this->assertSame(['name', 'description', 'content', 'stag'], array_keys($errors));
    }

    public function test_it_rejects_an_unknown_status(): void
    {
        $this->assertArrayHasKey(
            'status',
            $this->validate($this->validPost(['status' => 'archived']))->errors()->toArray()
        );
    }

    public function test_it_requires_categories_to_be_an_array(): void
    {
        $this->assertArrayHasKey(
            'productscategories',
            $this->validate($this->validPost(['productscategories' => 'one']))->errors()->toArray()
        );
    }

    public function test_it_does_not_validate_the_format_type_when_only_the_default_format_exists(): void
    {
        $this->formatsProperty()->setValue(null, ['' => ['key' => '', 'icon' => null, 'name' => 'Default']]);

        $this->assertArrayNotHasKey('format_type', (new PostRequest())->rules());
    }

    public function test_it_validates_the_format_type_against_the_registered_formats(): void
    {
        PostFormat::registerPostFormat(['video' => ['key' => 'video', 'icon' => null, 'name' => 'Video']]);

        $this->assertArrayHasKey('format_type', (new PostRequest())->rules());
        $this->assertTrue($this->validate($this->validPost(['format_type' => 'video']))->passes());
        $this->assertArrayHasKey(
            'format_type',
            $this->validate($this->validPost(['format_type' => 'audio']))->errors()->toArray()
        );
    }

    private function formatsProperty(): ReflectionProperty
    {
        $property = new ReflectionProperty(PostFormat::class, 'formats');
        $property->setAccessible(true);

        return $property;
    }
}
