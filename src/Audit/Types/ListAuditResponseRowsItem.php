<?php

namespace Nordlet\Audit\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ListAuditResponseRowsItem extends JsonSerializableType
{
    /**
     * @var int $id
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var value-of<ListAuditResponseRowsItemActorType> $actorType
     */
    #[JsonProperty('actorType')]
    public string $actorType;

    /**
     * @var ?string $actorId
     */
    #[JsonProperty('actorId')]
    public ?string $actorId;

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
     * @var mixed $diff
     */
    #[JsonProperty('diff')]
    public mixed $diff;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: int,
     *   actorType: value-of<ListAuditResponseRowsItemActorType>,
     *   action: string,
     *   entity: string,
     *   createdAt: DateTime,
     *   actorId?: ?string,
     *   entityId?: ?string,
     *   diff?: mixed,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->actorType = $values['actorType'];
        $this->actorId = $values['actorId'] ?? null;
        $this->action = $values['action'];
        $this->entity = $values['entity'];
        $this->entityId = $values['entityId'] ?? null;
        $this->diff = $values['diff'] ?? null;
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
