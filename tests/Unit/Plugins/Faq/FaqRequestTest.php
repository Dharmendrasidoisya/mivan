<?php

namespace Tests\Unit\Plugins\Faq;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Faq\Http\Requests\FaqCategoryRequest;
use Botble\Faq\Http\Requests\FaqRequest;
use Botble\Faq\Http\Requests\Settings\FaqSettingRequest;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class FaqRequestTest extends TestCase
{
    public function test_a_faq_requires_a_plot_and_a_known_status(): void
    {
        $rules = (new FaqRequest())->rules();

        $this->assertTrue(Validator::make([
            'plot' => 'Do you ship abroad?',
            'status' => BaseStatusEnum::PUBLISHED,
        ], $rules)->passes());

        $errors = Validator::make(['plot' => null, 'status' => 'archived'], $rules)->errors()->toArray();

        $this->assertArrayHasKey('plot', $errors);
        $this->assertArrayHasKey('status', $errors);
    }

    public function test_a_faq_category_accepts_valid_data(): void
    {
        $this->assertTrue(Validator::make([
            'name' => 'Shipping',
            'description' => 'Questions about shipping.',
            'order' => 0,
            'status' => BaseStatusEnum::PUBLISHED,
        ], (new FaqCategoryRequest())->rules())->passes());
    }

    public function test_a_faq_category_requires_a_name_an_order_and_a_status(): void
    {
        $errors = Validator::make([], (new FaqCategoryRequest())->rules())->errors()->toArray();

        $this->assertSame(['name', 'order', 'status'], array_keys($errors));
    }

    public function test_a_faq_category_bounds_its_lengths_and_order(): void
    {
        $errors = Validator::make([
            'name' => str_repeat('a', 251),
            'description' => str_repeat('b', 301),
            'order' => 128,
            'status' => BaseStatusEnum::PUBLISHED,
        ], (new FaqCategoryRequest())->rules())->errors()->toArray();

        $this->assertSame(['name', 'description', 'order'], array_keys($errors));

        $this->assertArrayHasKey('order', Validator::make([
            'name' => 'Shipping',
            'order' => -1,
            'status' => BaseStatusEnum::PUBLISHED,
        ], (new FaqCategoryRequest())->rules())->errors()->toArray());
    }

    public function test_the_faq_schema_setting_only_accepts_on_off_values(): void
    {
        $rules = (new FaqSettingRequest())->rules();

        $this->assertTrue(Validator::make(['enable_faq_schema' => 1], $rules)->passes());
        $this->assertTrue(Validator::make(['enable_faq_schema' => 0], $rules)->passes());
        $this->assertTrue(Validator::make(['enable_faq_schema' => 'on'], $rules)->fails());
        $this->assertTrue(Validator::make(['enable_faq_schema' => null], $rules)->fails());
    }

    public function test_the_faq_schema_setting_is_only_validated_when_it_is_submitted(): void
    {
        $this->assertTrue(Validator::make([], (new FaqSettingRequest())->rules())->passes());
    }
}
