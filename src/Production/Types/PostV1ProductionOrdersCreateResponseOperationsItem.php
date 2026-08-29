<?php

namespace Nordlet\Production\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ProductionOrdersCreateResponseOperationsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $routingOperationId
     */
    #[JsonProperty('routingOperationId')]
    public ?string $routingOperationId;

    /**
     * @var string $workCenterId
     */
    #[JsonProperty('workCenterId')]
    public string $workCenterId;

    /**
     * @var int $sequence
     */
    #[JsonProperty('sequence')]
    public int $sequence;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $plannedMinutes
     */
    #[JsonProperty('plannedMinutes')]
    public string $plannedMinutes;

    /**
     * @var ?string $actualMinutes
     */
    #[JsonProperty('actualMinutes')]
    public ?string $actualMinutes;

    /**
     * @var string $costPerHour
     */
    #[JsonProperty('costPerHour')]
    public string $costPerHour;

    /**
     * @var ?string $cost
     */
    #[JsonProperty('cost')]
    public ?string $cost;

    /**
     * @param array{
     *   id: string,
     *   workCenterId: string,
     *   sequence: int,
     *   name: string,
     *   plannedMinutes: string,
     *   costPerHour: string,
     *   routingOperationId?: ?string,
     *   actualMinutes?: ?string,
     *   cost?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->routingOperationId = $values['routingOperationId'] ?? null;
        $this->workCenterId = $values['workCenterId'];
        $this->sequence = $values['sequence'];
        $this->name = $values['name'];
        $this->plannedMinutes = $values['plannedMinutes'];
        $this->actualMinutes = $values['actualMinutes'] ?? null;
        $this->costPerHour = $values['costPerHour'];
        $this->cost = $values['cost'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
