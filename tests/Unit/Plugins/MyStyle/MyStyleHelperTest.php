<?php

namespace Tests\Unit\Plugins\MyStyle;

use Botble\MyStyle\MyStyleHelper;
use Tests\TestCase;

class MyStyleHelperTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        config(['plugins.my-style.config' => ['supported' => ['Foo\Model']]]);
    }

    private function helper(): MyStyleHelper
    {
        return new MyStyleHelper();
    }

    public function test_it_reads_supported_models_from_the_config(): void
    {
        $this->assertSame(['Foo\Model'], $this->helper()->supportedModels());
    }

    public function test_it_registers_a_single_model(): void
    {
        $helper = $this->helper()->registerModule('Bar\Model');

        $this->assertSame(['Foo\Model', 'Bar\Model'], $helper->supportedModels());
        $this->assertTrue($helper->isSupportedModel('Bar\Model'));
    }

    public function test_it_registers_multiple_models_at_once(): void
    {
        $helper = $this->helper()->registerModule(['Bar\Model', 'Baz\Model']);

        $this->assertSame(['Foo\Model', 'Bar\Model', 'Baz\Model'], $helper->supportedModels());
    }

    public function test_it_reports_unsupported_models(): void
    {
        $this->assertFalse($this->helper()->isSupportedModel('Unknown\Model'));
    }

    public function test_it_unregisters_a_model(): void
    {
        $helper = $this->helper()->registerModule('Bar\Model')->unregisterModule('Foo\Model');

        $this->assertFalse($helper->isSupportedModel('Foo\Model'));
        $this->assertTrue($helper->isSupportedModel('Bar\Model'));
    }

    public function test_unregistering_an_unknown_model_changes_nothing(): void
    {
        $helper = $this->helper()->unregisterModule('Unknown\Model');

        $this->assertSame(['Foo\Model'], $helper->supportedModels());
    }

    public function test_it_merges_config_values(): void
    {
        $helper = $this->helper()->setConfig(['theme' => 'dark']);

        $this->assertSame('dark', $helper->config('theme'));
        $this->assertSame(['Foo\Model'], $helper->config('supported'));
        $this->assertSame(['supported' => ['Foo\Model'], 'theme' => 'dark'], $helper->config());
        $this->assertSame('dark', config('plugins.my-style.config.theme'));
    }

    public function test_it_returns_the_default_for_a_missing_config_key(): void
    {
        $this->assertSame('fallback', $this->helper()->config('missing', 'fallback'));
    }

    public function test_registering_and_unregistering_are_chainable(): void
    {
        $helper = $this->helper();

        $this->assertSame($helper, $helper->registerModule('Bar\Model'));
        $this->assertSame($helper, $helper->unregisterModule('Bar\Model'));
        $this->assertSame($helper, $helper->setConfig([]));
    }
}
