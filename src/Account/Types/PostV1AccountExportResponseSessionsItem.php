<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountExportResponseSessionsItem extends JsonSerializableType
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
     * @var ?string $lastSeenAt
     */
    #[JsonProperty('lastSeenAt')]
    public ?string $lastSeenAt;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $expiresAt
     */
    #[JsonProperty('expiresAt')]
    public string $expiresAt;

    /**
     * @var bool $current
     */
    #[JsonProperty('current')]
    public bool $current;

    /**
     * @param array{
     *   id: string,
     *   createdAt: string,
     *   expiresAt: string,
     *   current: bool,
     *   companyId?: ?string,
     *   ipAddress?: ?string,
     *   userAgent?: ?string,
     *   lastSeenAt?: ?string,
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
