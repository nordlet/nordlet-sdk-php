<?php

namespace Nordlet\Pos\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ReceiptsCreatePosRequestLinesItem extends JsonSerializableType
{
    /**
     * @var ?string $itemId
     */
    #[JsonProperty('itemId')]
    public ?string $itemId;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var string $unitPriceInclVat
     */
    #[JsonProperty('unitPriceInclVat')]
    public string $unitPriceInclVat;

    /**
     * @var string $vatRatePercent
     */
    #[JsonProperty('vatRatePercent')]
    public string $vatRatePercent;

    /**
     * @param array{
     *   quantity: string,
     *   unitPriceInclVat: string,
     *   vatRatePercent: string,
     *   itemId?: ?string,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemId = $values['itemId'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->quantity = $values['quantity'];
        $this->unitPriceInclVat = $values['unitPriceInclVat'];
        $this->vatRatePercent = $values['vatRatePercent'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
