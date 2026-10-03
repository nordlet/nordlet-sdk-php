<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1AccountApiKeysCreateResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var array<string> $scopes
     */
    #[JsonProperty('scopes'), ArrayType(['string'])]
    public array $scopes;

    /**
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var ?string $expiresAt
     */
    #[JsonProperty('expiresAt')]
    public ?string $expiresAt;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   scopes: array<string>,
     *   key: string,
     *   expiresAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->scopes = $values['scopes'];
        $this->key = $values['key'];
        $this->expiresAt = $values['expiresAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
