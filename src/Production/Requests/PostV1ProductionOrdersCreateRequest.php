<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Production\Types\PostV1ProductionOrdersCreateRequestType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ProductionOrdersCreateRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<PostV1ProductionOrdersCreateRequestType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var string $bomId
     */
    #[JsonProperty('bomId')]
    public string $bomId;

    /**
     * @var string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public string $warehouseId;

    /**
     * @var ?string $routingId
     */
    #[JsonProperty('routingId')]
    public ?string $routingId;

    /**
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   bomId: string,
     *   warehouseId: string,
     *   quantity: string,
     *   date: string,
     *   type?: ?value-of<PostV1ProductionOrdersCreateRequestType>,
     *   routingId?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'] ?? null;
        $this->bomId = $values['bomId'];
        $this->warehouseId = $values['warehouseId'];
        $this->routingId = $values['routingId'] ?? null;
        $this->quantity = $values['quantity'];
        $this->date = $values['date'];
        $this->notes = $values['notes'] ?? null;
    }
}
