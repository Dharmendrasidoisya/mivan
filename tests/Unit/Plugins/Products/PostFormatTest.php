<?php

namespace Tests\Unit\Plugins\Products;

use Botble\Products\Supports\PostFormat;
use Tests\Unit\Plugins\Shared\PostFormatTestCase;

class PostFormatTest extends PostFormatTestCase
{
    protected function postFormatClass(): string
    {
        return PostFormat::class;
    }
}
