<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class LandedCostsGetInventoryResponseLinesItem extends JsonSerializableType
{
    /**
     * @var string $movementId
     */
    #[JsonProperty('movementId')]
    public string $movementId;

    /**
     * @var string $allocatedAmount
     */
    #[JsonProperty('allocatedAmount')]
    public string $allocatedAmount;

    /**
     * @var string $newUnitCost
     */
    #[JsonProperty('newUnitCost')]
    public string $newUnitCost;

    /**
     * @param array{
     *   movementId: string,
     *   allocatedAmount: string,
     *   newUnitCost: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->movementId = $values['movementId'];
        $this->allocatedAmount = $values['allocatedAmount'];
        $this->newUnitCost = $values['newUnitCost'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
