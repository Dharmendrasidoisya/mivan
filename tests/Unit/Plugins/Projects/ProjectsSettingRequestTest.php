<?php

namespace Tests\Unit\Plugins\Projects;

use Botble\Projects\Http\Requests\Settings\ProjectsSettingRequest;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class ProjectsSettingRequestTest extends TestCase
{
    private function validate(array $data): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($data, (new ProjectsSettingRequest())->rules());
    }

    public function test_it_accepts_valid_settings(): void
    {
        $this->assertTrue($this->validate([
            'projects_post_schema_enabled' => 1,
            'projects_post_schema_type' => 'Article',
        ])->passes());
    }

    public function test_the_schema_type_is_optional(): void
    {
        $this->assertTrue($this->validate([
            'projects_post_schema_enabled' => 0,
            'projects_post_schema_type' => null,
        ])->passes());
    }

    public function test_it_rejects_an_unknown_schema_type(): void
    {
        $this->assertArrayHasKey('projects_post_schema_type', $this->validate([
            'projects_post_schema_enabled' => 1,
            'projects_post_schema_type' => 'BlogPosting',
        ])->errors()->toArray());
    }

    public function test_the_enabled_flag_only_accepts_on_off_values(): void
    {
        $this->assertTrue($this->validate(['projects_post_schema_enabled' => 'yes'])->fails());
        $this->assertTrue($this->validate(['projects_post_schema_enabled' => null])->fails());
    }

    public function test_the_enabled_flag_is_only_validated_when_it_is_submitted(): void
    {
        $this->assertTrue($this->validate([])->passes());
    }
}
