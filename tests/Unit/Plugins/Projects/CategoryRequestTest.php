<?php

namespace Tests\Unit\Plugins\Projects;

use Botble\Projects\Http\Requests\CategoryRequest;
use Tests\Unit\Plugins\Shared\CategoryRequestTestCase;

class CategoryRequestTest extends CategoryRequestTestCase
{
    protected function requestClass(): string
    {
        return CategoryRequest::class;
    }
}
