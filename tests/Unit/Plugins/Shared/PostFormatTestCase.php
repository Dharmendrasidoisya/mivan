<?php

namespace Tests\Unit\Plugins\Shared;

use PHPUnit\Framework\TestCase;

/**
 * Shared expectations for the identical `PostFormat` supports of the products and projects plugins.
 */
abstract class PostFormatTestCase extends TestCase
{
    use RestoresPostFormats;

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

    public function test_it_has_a_default_format(): void
    {
        $formats = $this->postFormatClass()::getPostFormats();

        $this->assertArrayHasKey('', $formats);
        $this->assertSame('Default', $formats['']['name']);
    }

    public function test_it_registers_new_formats(): void
    {
        $this->postFormatClass()::registerPostFormat([
            'video' => ['key' => 'video', 'icon' => 'fa fa-video', 'name' => 'Video'],
        ]);

        $formats = $this->postFormatClass()::getPostFormats();

        $this->assertArrayHasKey('video', $formats);
        $this->assertSame('Video', $formats['video']['name']);
    }

    public function test_registering_an_existing_key_overrides_it(): void
    {
        $this->registerVideoFormat();
        $this->postFormatClass()::registerPostFormat(['video' => ['key' => 'video', 'icon' => null, 'name' => 'Movie']]);

        $this->assertSame('Movie', $this->postFormatClass()::getPostFormats()['video']['name']);
    }

    public function test_registering_nothing_keeps_the_existing_formats(): void
    {
        $before = $this->postFormatClass()::getPostFormats();

        $this->postFormatClass()::registerPostFormat();

        $this->assertSame($before, $this->postFormatClass()::getPostFormats());
    }

    public function test_it_returns_formats_as_select_options(): void
    {
        $this->registerVideoFormat();

        $this->assertSame([
            '' => ['', 'Default'],
            'video' => ['video', 'Video'],
        ], $this->postFormatClass()::getPostFormats(true));
    }
}
