<?php

namespace Tests\Unit\Plugins\Projects;

use Botble\Projects\Supports\FilterPost;
use Tests\Unit\Plugins\Shared\FilterPostTestCase;

class FilterPostTest extends FilterPostTestCase
{
    protected function filterClass(): string
    {
        return FilterPost::class;
    }

    protected function taxonomyPrefix(): string
    {
        return 'projects';
    }
}
