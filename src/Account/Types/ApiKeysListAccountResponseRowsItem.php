<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use DateTime;
use Nordlet\Core\Types\Date;

class ApiKeysListAccountResponseRowsItem extends JsonSerializableType
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
     * @var ?DateTime $lastUsedAt
     */
    #[JsonProperty('lastUsedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $lastUsedAt;

    /**
     * @var ?DateTime $expiresAt
     */
    #[JsonProperty('expiresAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $expiresAt;

    /**
     * @var ?string $replacedByKeyId
     */
    #[JsonProperty('replacedByKeyId')]
    public ?string $replacedByKeyId;

    /**
     * @var ?string $createdByUserId
     */
    #[JsonProperty('createdByUserId')]
    public ?string $createdByUserId;

    /**
     * @var ?DateTime $revokedAt
     */
    #[JsonProperty('revokedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $revokedAt;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   scopes: array<string>,
     *   createdAt: DateTime,
     *   lastUsedAt?: ?DateTime,
     *   expiresAt?: ?DateTime,
     *   replacedByKeyId?: ?string,
     *   createdByUserId?: ?string,
     *   revokedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->scopes = $values['scopes'];
        $this->lastUsedAt = $values['lastUsedAt'] ?? null;
        $this->expiresAt = $values['expiresAt'] ?? null;
        $this->replacedByKeyId = $values['replacedByKeyId'] ?? null;
        $this->createdByUserId = $values['createdByUserId'] ?? null;
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
