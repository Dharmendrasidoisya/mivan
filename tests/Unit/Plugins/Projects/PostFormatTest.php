<?php

namespace Tests\Unit\Plugins\Projects;

use Botble\Projects\Supports\PostFormat;
use PHPUnit\Framework\TestCase;
use ReflectionProperty;

class PostFormatTest extends TestCase
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

    public function test_it_has_a_default_format(): void
    {
        $formats = PostFormat::getPostFormats();

        $this->assertArrayHasKey('', $formats);
        $this->assertSame('Default', $formats['']['name']);
    }

    public function test_it_registers_new_formats(): void
    {
        PostFormat::registerPostFormat([
            'video' => ['key' => 'video', 'icon' => 'fa fa-video', 'name' => 'Video'],
        ]);

        $formats = PostFormat::getPostFormats();

        $this->assertArrayHasKey('video', $formats);
        $this->assertSame('Video', $formats['video']['name']);
    }

    public function test_registering_an_existing_key_overrides_it(): void
    {
        PostFormat::registerPostFormat(['video' => ['key' => 'video', 'icon' => null, 'name' => 'Video']]);
        PostFormat::registerPostFormat(['video' => ['key' => 'video', 'icon' => null, 'name' => 'Movie']]);

        $this->assertSame('Movie', PostFormat::getPostFormats()['video']['name']);
    }

    public function test_registering_nothing_keeps_the_existing_formats(): void
    {
        $before = PostFormat::getPostFormats();

        PostFormat::registerPostFormat();

        $this->assertSame($before, PostFormat::getPostFormats());
    }

    public function test_it_returns_formats_as_select_options(): void
    {
        PostFormat::registerPostFormat(['video' => ['key' => 'video', 'icon' => null, 'name' => 'Video']]);

        $this->assertSame([
            '' => ['', 'Default'],
            'video' => ['video', 'Video'],
        ], PostFormat::getPostFormats(true));
    }

    private function formatsProperty(): ReflectionProperty
    {
        $property = new ReflectionProperty(PostFormat::class, 'formats');
        $property->setAccessible(true);

        return $property;
    }
}
