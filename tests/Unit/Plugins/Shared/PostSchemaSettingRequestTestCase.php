<?php

namespace Tests\Unit\Plugins\Shared;

use Tests\TestCase;

/**
 * Shared expectations for the identical schema setting requests of the products and projects plugins.
 */
abstract class PostSchemaSettingRequestTestCase extends TestCase
{
    use ValidatesRequestRules;

    /**
     * Prefix of the setting keys, e.g. `products` for `products_post_schema_enabled`.
     */
    abstract protected function settingPrefix(): string;

    private function enabledField(): string
    {
        return $this->settingPrefix() . '_post_schema_enabled';
    }

    private function typeField(): string
    {
        return $this->settingPrefix() . '_post_schema_type';
    }

    public function test_it_accepts_valid_settings(): void
    {
        $this->assertTrue($this->validate([
            $this->enabledField() => 1,
            $this->typeField() => 'Article',
        ])->passes());
    }

    public function test_the_schema_type_is_optional(): void
    {
        $this->assertTrue($this->validate([
            $this->enabledField() => 0,
            $this->typeField() => null,
        ])->passes());
    }

    public function test_it_rejects_an_unknown_schema_type(): void
    {
        $this->assertContains($this->typeField(), $this->errorKeys([
            $this->enabledField() => 1,
            $this->typeField() => 'BlogPosting',
        ]));
    }

    public function test_the_enabled_flag_only_accepts_on_off_values(): void
    {
        $this->assertTrue($this->validate([$this->enabledField() => 'yes'])->fails());
        $this->assertTrue($this->validate([$this->enabledField() => null])->fails());
    }

    public function test_the_enabled_flag_is_only_validated_when_it_is_submitted(): void
    {
        $this->assertTrue($this->validate([])->passes());
    }
}
