<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Production\Types\OrdersCreateProductionRequestType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class OrdersCreateProductionRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<OrdersCreateProductionRequestType> $type
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
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

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
     *   date: DateTime,
     *   type?: ?value-of<OrdersCreateProductionRequestType>,
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
