<?php

namespace Tests\Unit\Plugins\Projects;

use Botble\Projects\Http\Requests\Settings\ProjectsSettingRequest;
use Tests\Unit\Plugins\Shared\PostSchemaSettingRequestTestCase;

class ProjectsSettingRequestTest extends PostSchemaSettingRequestTestCase
{
    protected function requestClass(): string
    {
        return ProjectsSettingRequest::class;
    }

    protected function settingPrefix(): string
    {
        return 'projects';
    }
}
