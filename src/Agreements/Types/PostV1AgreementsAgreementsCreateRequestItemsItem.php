<?php

namespace Nordlet\Agreements\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AgreementsAgreementsCreateRequestItemsItem extends JsonSerializableType
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
     * @var ?string $quantity
     */
    #[JsonProperty('quantity')]
    public ?string $quantity;

    /**
     * @var ?string $unitPrice
     */
    #[JsonProperty('unitPrice')]
    public ?string $unitPrice;

    /**
     * @var ?string $vatRatePercent
     */
    #[JsonProperty('vatRatePercent')]
    public ?string $vatRatePercent;

    /**
     * @param array{
     *   description: string,
     *   itemId?: ?string,
     *   quantity?: ?string,
     *   unitPrice?: ?string,
     *   vatRatePercent?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemId = $values['itemId'] ?? null;
        $this->description = $values['description'];
        $this->quantity = $values['quantity'] ?? null;
        $this->unitPrice = $values['unitPrice'] ?? null;
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
