<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class SettingsUpdateInventoryResponse extends JsonSerializableType
{
    /**
     * @var value-of<SettingsUpdateInventoryResponseNegativeStockPolicy> $negativeStockPolicy
     */
    #[JsonProperty('negativeStockPolicy')]
    public string $negativeStockPolicy;

    /**
     * @param array{
     *   negativeStockPolicy: value-of<SettingsUpdateInventoryResponseNegativeStockPolicy>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->negativeStockPolicy = $values['negativeStockPolicy'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
