<?php

namespace Nordlet\Production\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ProductionQualityChecksAddResponse extends JsonSerializableType
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
     * @var value-of<PostV1ProductionQualityChecksAddResponseResult> $result
     */
    #[JsonProperty('result')]
    public string $result;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?string $checkedAt
     */
    #[JsonProperty('checkedAt')]
    public ?string $checkedAt;

    /**
     * @var ?string $checkedBy
     */
    #[JsonProperty('checkedBy')]
    public ?string $checkedBy;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   orderId: string,
     *   name: string,
     *   result: value-of<PostV1ProductionQualityChecksAddResponseResult>,
     *   createdAt: string,
     *   routingOperationId?: ?string,
     *   notes?: ?string,
     *   checkedAt?: ?string,
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
