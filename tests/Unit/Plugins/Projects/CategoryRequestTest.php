<?php

namespace Tests\Unit\Plugins\Projects;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Projects\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class CategoryRequestTest extends TestCase
{
    private function validate(array $data): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($data, (new CategoryRequest())->rules());
    }

    private function validCategory(array $overrides = []): array
    {
        return array_merge([
            'name' => 'Living room',
            'description' => 'Sofas, tables and more.',
            'shortdescription' => 'Sofas and tables.',
            'status' => BaseStatusEnum::PUBLISHED,
            'is_default' => 0,
            'is_featured' => 1,
        ], $overrides);
    }

    public function test_it_accepts_a_valid_category(): void
    {
        $this->assertTrue($this->validate($this->validCategory())->passes());
    }

    public function test_it_requires_a_name(): void
    {
        $this->assertArrayHasKey(
            'name',
            $this->validate($this->validCategory(['name' => null]))->errors()->toArray()
        );
    }

    public function test_it_limits_the_length_of_the_name_and_the_short_description(): void
    {
        $errors = $this->validate($this->validCategory([
            'name' => str_repeat('a', 121),
            'shortdescription' => str_repeat('b', 401),
        ]))->errors()->toArray();

        $this->assertArrayHasKey('name', $errors);
        $this->assertArrayHasKey('shortdescription', $errors);
    }

    public function test_it_allows_a_long_description(): void
    {
        $this->assertTrue($this->validate($this->validCategory([
            'description' => str_repeat('c', 5000),
        ]))->passes());
    }

    public function test_it_rejects_an_unknown_status(): void
    {
        $this->assertArrayHasKey(
            'status',
            $this->validate($this->validCategory(['status' => 'archived']))->errors()->toArray()
        );
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
