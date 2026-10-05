<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ExportAccountResponseAuditEntriesItem extends JsonSerializableType
{
    /**
     * @var int $id
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var string $companyId
     */
    #[JsonProperty('companyId')]
    public string $companyId;

    /**
     * @var string $action
     */
    #[JsonProperty('action')]
    public string $action;

    /**
     * @var string $entity
     */
    #[JsonProperty('entity')]
    public string $entity;

    /**
     * @var ?string $entityId
     */
    #[JsonProperty('entityId')]
    public ?string $entityId;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: int,
     *   companyId: string,
     *   action: string,
     *   entity: string,
     *   createdAt: DateTime,
     *   entityId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->companyId = $values['companyId'];
        $this->action = $values['action'];
        $this->entity = $values['entity'];
        $this->entityId = $values['entityId'] ?? null;
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
