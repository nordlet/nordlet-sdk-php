<?php

namespace Nordlet\Purchases\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ReceiptsGetPurchasesResponseLinesItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orderLineId
     */
    #[JsonProperty('orderLineId')]
    public string $orderLineId;

    /**
     * @var ?string $itemId
     */
    #[JsonProperty('itemId')]
    public ?string $itemId;

    /**
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var ?string $unitCost
     */
    #[JsonProperty('unitCost')]
    public ?string $unitCost;

    /**
     * @var ?string $stockMovementId
     */
    #[JsonProperty('stockMovementId')]
    public ?string $stockMovementId;

    /**
     * @param array{
     *   id: string,
     *   orderLineId: string,
     *   quantity: string,
     *   itemId?: ?string,
     *   unitCost?: ?string,
     *   stockMovementId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->orderLineId = $values['orderLineId'];
        $this->itemId = $values['itemId'] ?? null;
        $this->quantity = $values['quantity'];
        $this->unitCost = $values['unitCost'] ?? null;
        $this->stockMovementId = $values['stockMovementId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
