<?php

namespace Tests\Unit\Plugins\WhatsAppFloatingButton;

use Datlechin\WhatsAppFloatingButton\Http\Requests\WhatsAppFloatingButtonSettingRequest;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class WhatsAppFloatingButtonSettingRequestTest extends TestCase
{
    private function validate(array $data): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($data, (new WhatsAppFloatingButtonSettingRequest())->rules());
    }

    private function validSettings(array $overrides = []): array
    {
        return array_merge([
            'enabled' => 1,
            'phone_number' => '+15551234567',
            'position' => 'right',
            'show_popup' => 0,
            'size' => 60,
            'z_index' => 10,
            'offset_x' => 20,
            'offset_y' => 20,
        ], $overrides);
    }

    public function test_it_accepts_valid_settings(): void
    {
        $this->assertTrue($this->validate($this->validSettings())->passes());
    }

    public function test_it_requires_a_phone_number_when_enabled(): void
    {
        $validator = $this->validate($this->validSettings(['phone_number' => null]));

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('phone_number', $validator->errors()->toArray());
    }

    public function test_the_phone_number_is_optional_when_disabled(): void
    {
        $this->assertTrue($this->validate($this->validSettings([
            'enabled' => 0,
            'phone_number' => null,
            'show_popup' => null,
        ]))->passes());
    }

    public function test_it_only_accepts_left_or_right_positions(): void
    {
        $this->assertTrue($this->validate($this->validSettings(['position' => 'left']))->passes());
        $this->assertTrue($this->validate($this->validSettings(['position' => 'center']))->fails());
        $this->assertTrue($this->validate($this->validSettings(['position' => null]))->fails());
    }

    public function test_it_requires_popup_texts_when_the_popup_is_shown(): void
    {
        $validator = $this->validate($this->validSettings(['show_popup' => 1]));

        $this->assertTrue($validator->fails());
        $this->assertSame(
            ['popup_title', 'popup_message'],
            array_keys($validator->errors()->toArray())
        );

        $this->assertTrue($this->validate($this->validSettings([
            'show_popup' => 1,
            'popup_title' => 'Need help?',
            'popup_message' => 'Chat with us on WhatsApp.',
        ]))->passes());
    }

    public function test_it_bounds_the_button_size(): void
    {
        $this->assertTrue($this->validate($this->validSettings(['size' => 9]))->fails());
        $this->assertTrue($this->validate($this->validSettings(['size' => 1001]))->fails());
        $this->assertTrue($this->validate($this->validSettings(['size' => 10]))->passes());
        $this->assertTrue($this->validate($this->validSettings(['size' => 1000]))->passes());
    }

    public function test_it_requires_integer_positioning_values(): void
    {
        foreach (['z_index', 'offset_x', 'offset_y'] as $field) {
            $this->assertTrue(
                $this->validate($this->validSettings([$field => 'abc']))->fails(),
                sprintf('Expected [%s] to reject a non-integer value.', $field)
            );

            $this->assertTrue(
                $this->validate($this->validSettings([$field => null]))->fails(),
                sprintf('Expected [%s] to be required.', $field)
            );
        }
    }
}
