<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1AccountApiKeysListResponseRowsItem extends JsonSerializableType
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
     * @var ?string $lastUsedAt
     */
    #[JsonProperty('lastUsedAt')]
    public ?string $lastUsedAt;

    /**
     * @var ?string $revokedAt
     */
    #[JsonProperty('revokedAt')]
    public ?string $revokedAt;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   scopes: array<string>,
     *   createdAt: string,
     *   lastUsedAt?: ?string,
     *   revokedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->scopes = $values['scopes'];
        $this->lastUsedAt = $values['lastUsedAt'] ?? null;
        $this->revokedAt = $values['revokedAt'] ?? null;
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
