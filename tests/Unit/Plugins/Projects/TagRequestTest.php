<?php

namespace Tests\Unit\Plugins\Projects;

use Botble\Projects\Http\Requests\TagRequest;
use Tests\Unit\Plugins\Shared\TagRequestTestCase;

class TagRequestTest extends TagRequestTestCase
{
    protected function requestClass(): string
    {
        return TagRequest::class;
    }
}
