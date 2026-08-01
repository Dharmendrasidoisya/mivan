<?php

namespace Tests\Unit\Plugins\Projects;

use Botble\Projects\Http\Requests\PostRequest;
use Botble\Projects\Supports\PostFormat;
use Tests\Unit\Plugins\Shared\PostRequestTestCase;

class PostRequestTest extends PostRequestTestCase
{
    protected function requestClass(): string
    {
        return PostRequest::class;
    }

    protected function postFormatClass(): string
    {
        return PostFormat::class;
    }

    protected function categoriesField(): string
    {
        return 'projectscategories';
    }
}
