<?php

namespace Tests\Unit\Plugins\Products;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Products\Http\Requests\TagRequest;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class TagRequestTest extends TestCase
{
    private function validate(array $data): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($data, (new TagRequest())->rules());
    }

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
        $this->assertArrayHasKey('name', $this->validate(['name' => ''])->errors()->toArray());
    }

    public function test_it_limits_the_length_of_the_name_and_the_description(): void
    {
        $errors = $this->validate([
            'name' => str_repeat('a', 121),
            'description' => str_repeat('b', 401),
        ])->errors()->toArray();

        $this->assertArrayHasKey('name', $errors);
        $this->assertArrayHasKey('description', $errors);
    }

    public function test_it_rejects_an_unknown_status(): void
    {
        $errors = $this->validate(['name' => 'Chairs', 'status' => 'unknown'])->errors()->toArray();

        $this->assertArrayHasKey('status', $errors);
    }
}
