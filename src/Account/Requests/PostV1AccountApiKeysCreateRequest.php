<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1AccountApiKeysCreateRequest extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?array<string> $scopes
     */
    #[JsonProperty('scopes'), ArrayType(['string'])]
    public ?array $scopes;

    /**
     * @param array{
     *   name: string,
     *   scopes?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->scopes = $values['scopes'] ?? null;
    }
}
