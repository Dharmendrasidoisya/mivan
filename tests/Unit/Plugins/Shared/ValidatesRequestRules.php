<?php

namespace Tests\Unit\Plugins\Shared;

use Illuminate\Contracts\Validation\Validator as ValidatorContract;
use Illuminate\Support\Facades\Validator;

/**
 * Validates payloads against the rules of a form request without dispatching it.
 */
trait ValidatesRequestRules
{
    /**
     * Fully qualified name of the form request whose rules are under test.
     */
    abstract protected function requestClass(): string;

    protected function rules(): array
    {
        $requestClass = $this->requestClass();

        return (new $requestClass())->rules();
    }

    protected function validate(array $data): ValidatorContract
    {
        return Validator::make($data, $this->rules());
    }

    protected function errorKeys(array $data): array
    {
        return array_keys($this->validate($data)->errors()->toArray());
    }
}
