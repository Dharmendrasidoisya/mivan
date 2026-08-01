<?php

namespace Tests\Unit\Plugins\Shared;

use ReflectionProperty;

/**
 * Keeps the static `PostFormat::$formats` registry isolated between tests.
 */
trait RestoresPostFormats
{
    private array $originalPostFormats;

    /**
     * Fully qualified name of the plugin `Supports\PostFormat` class under test.
     */
    abstract protected function postFormatClass(): string;

    protected function rememberPostFormats(): void
    {
        $this->originalPostFormats = $this->postFormatsProperty()->getValue();
    }

    protected function restorePostFormats(): void
    {
        $this->postFormatsProperty()->setValue(null, $this->originalPostFormats);
    }

    protected function keepOnlyTheDefaultPostFormat(): void
    {
        $this->postFormatsProperty()->setValue(null, ['' => ['key' => '', 'icon' => null, 'name' => 'Default']]);
    }

    protected function registerVideoFormat(): void
    {
        $this->postFormatClass()::registerPostFormat([
            'video' => ['key' => 'video', 'icon' => null, 'name' => 'Video'],
        ]);
    }

    private function postFormatsProperty(): ReflectionProperty
    {
        $property = new ReflectionProperty($this->postFormatClass(), 'formats');
        $property->setAccessible(true);

        return $property;
    }
}
