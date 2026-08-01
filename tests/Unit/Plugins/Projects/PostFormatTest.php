<?php

namespace Tests\Unit\Plugins\Projects;

use Botble\Projects\Supports\PostFormat;
use Tests\Unit\Plugins\Shared\PostFormatTestCase;

class PostFormatTest extends PostFormatTestCase
{
    protected function postFormatClass(): string
    {
        return PostFormat::class;
    }
}
