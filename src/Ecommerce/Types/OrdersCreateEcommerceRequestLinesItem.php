<?php

namespace Nordlet\Ecommerce\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class OrdersCreateEcommerceRequestLinesItem extends JsonSerializableType
{
    /**
     * @var ?string $itemId
     */
    #[JsonProperty('itemId')]
    public ?string $itemId;

    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var string $unitPriceExclVat
     */
    #[JsonProperty('unitPriceExclVat')]
    public string $unitPriceExclVat;

    /**
     * @var ?string $vatRatePercent
     */
    #[JsonProperty('vatRatePercent')]
    public ?string $vatRatePercent;

    /**
     * @param array{
     *   description: string,
     *   quantity: string,
     *   unitPriceExclVat: string,
     *   itemId?: ?string,
     *   vatRatePercent?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemId = $values['itemId'] ?? null;
        $this->description = $values['description'];
        $this->quantity = $values['quantity'];
        $this->unitPriceExclVat = $values['unitPriceExclVat'];
        $this->vatRatePercent = $values['vatRatePercent'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
