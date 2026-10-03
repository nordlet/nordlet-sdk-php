<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1AccountApiKeysRotateResponse extends JsonSerializableType
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
     * @var string $replacedKeyId
     */
    #[JsonProperty('replacedKeyId')]
    public string $replacedKeyId;

    /**
     * @var string $replacedKeyExpiresAt
     */
    #[JsonProperty('replacedKeyExpiresAt')]
    public string $replacedKeyExpiresAt;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   scopes: array<string>,
     *   key: string,
     *   replacedKeyId: string,
     *   replacedKeyExpiresAt: string,
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
        $this->replacedKeyId = $values['replacedKeyId'];
        $this->replacedKeyExpiresAt = $values['replacedKeyExpiresAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
