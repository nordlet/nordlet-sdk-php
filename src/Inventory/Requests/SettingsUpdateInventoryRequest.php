<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Inventory\Types\SettingsUpdateInventoryRequestNegativeStockPolicy;
use Nordlet\Core\Json\JsonProperty;

class SettingsUpdateInventoryRequest extends JsonSerializableType
{
    /**
     * @var value-of<SettingsUpdateInventoryRequestNegativeStockPolicy> $negativeStockPolicy
     */
    #[JsonProperty('negativeStockPolicy')]
    public string $negativeStockPolicy;

    /**
     * @param array{
     *   negativeStockPolicy: value-of<SettingsUpdateInventoryRequestNegativeStockPolicy>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->negativeStockPolicy = $values['negativeStockPolicy'];
    }
}
