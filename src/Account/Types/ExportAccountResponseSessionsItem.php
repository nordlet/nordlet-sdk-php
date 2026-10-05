<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ExportAccountResponseSessionsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $companyId
     */
    #[JsonProperty('companyId')]
    public ?string $companyId;

    /**
     * @var ?string $ipAddress
     */
    #[JsonProperty('ipAddress')]
    public ?string $ipAddress;

    /**
     * @var ?string $userAgent
     */
    #[JsonProperty('userAgent')]
    public ?string $userAgent;

    /**
     * @var ?DateTime $lastSeenAt
     */
    #[JsonProperty('lastSeenAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $lastSeenAt;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $expiresAt
     */
    #[JsonProperty('expiresAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $expiresAt;

    /**
     * @var bool $current
     */
    #[JsonProperty('current')]
    public bool $current;

    /**
     * @param array{
     *   id: string,
     *   createdAt: DateTime,
     *   expiresAt: DateTime,
     *   current: bool,
     *   companyId?: ?string,
     *   ipAddress?: ?string,
     *   userAgent?: ?string,
     *   lastSeenAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->companyId = $values['companyId'] ?? null;
        $this->ipAddress = $values['ipAddress'] ?? null;
        $this->userAgent = $values['userAgent'] ?? null;
        $this->lastSeenAt = $values['lastSeenAt'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->expiresAt = $values['expiresAt'];
        $this->current = $values['current'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
