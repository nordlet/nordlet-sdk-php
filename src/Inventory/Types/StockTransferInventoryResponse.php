<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class StockTransferInventoryResponse extends JsonSerializableType
{
    /**
     * @var string $outMovementId
     */
    #[JsonProperty('outMovementId')]
    public string $outMovementId;

    /**
     * @var string $inMovementId
     */
    #[JsonProperty('inMovementId')]
    public string $inMovementId;

    /**
     * @var string $totalCost
     */
    #[JsonProperty('totalCost')]
    public string $totalCost;

    /**
     * @param array{
     *   outMovementId: string,
     *   inMovementId: string,
     *   totalCost: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->outMovementId = $values['outMovementId'];
        $this->inMovementId = $values['inMovementId'];
        $this->totalCost = $values['totalCost'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
