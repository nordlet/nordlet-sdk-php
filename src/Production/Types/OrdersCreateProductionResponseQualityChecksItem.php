<?php

namespace Nordlet\Production\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class OrdersCreateProductionResponseQualityChecksItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orderId
     */
    #[JsonProperty('orderId')]
    public string $orderId;

    /**
     * @var ?string $routingOperationId
     */
    #[JsonProperty('routingOperationId')]
    public ?string $routingOperationId;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<OrdersCreateProductionResponseQualityChecksItemResult> $result
     */
    #[JsonProperty('result')]
    public string $result;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?DateTime $checkedAt
     */
    #[JsonProperty('checkedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $checkedAt;

    /**
     * @var ?string $checkedBy
     */
    #[JsonProperty('checkedBy')]
    public ?string $checkedBy;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   orderId: string,
     *   name: string,
     *   result: value-of<OrdersCreateProductionResponseQualityChecksItemResult>,
     *   createdAt: DateTime,
     *   routingOperationId?: ?string,
     *   notes?: ?string,
     *   checkedAt?: ?DateTime,
     *   checkedBy?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->orderId = $values['orderId'];
        $this->routingOperationId = $values['routingOperationId'] ?? null;
        $this->name = $values['name'];
        $this->result = $values['result'];
        $this->notes = $values['notes'] ?? null;
        $this->checkedAt = $values['checkedAt'] ?? null;
        $this->checkedBy = $values['checkedBy'] ?? null;
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
