<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Inventory\Types\PostV1InventorySettingsUpdateRequestNegativeStockPolicy;
use Nordlet\Core\Json\JsonProperty;

class PostV1InventorySettingsUpdateRequest extends JsonSerializableType
{
    /**
     * @var value-of<PostV1InventorySettingsUpdateRequestNegativeStockPolicy> $negativeStockPolicy
     */
    #[JsonProperty('negativeStockPolicy')]
    public string $negativeStockPolicy;

    /**
     * @param array{
     *   negativeStockPolicy: value-of<PostV1InventorySettingsUpdateRequestNegativeStockPolicy>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->negativeStockPolicy = $values['negativeStockPolicy'];
    }
}
