<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class StockWriteOffInventoryResponse extends JsonSerializableType
{
    /**
     * @var string $movementId
     */
    #[JsonProperty('movementId')]
    public string $movementId;

    /**
     * @var string $totalCost
     */
    #[JsonProperty('totalCost')]
    public string $totalCost;

    /**
     * @var string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public string $journalTransactionId;

    /**
     * @param array{
     *   movementId: string,
     *   totalCost: string,
     *   journalTransactionId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->movementId = $values['movementId'];
        $this->totalCost = $values['totalCost'];
        $this->journalTransactionId = $values['journalTransactionId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
