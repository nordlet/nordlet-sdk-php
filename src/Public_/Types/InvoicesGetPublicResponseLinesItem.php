<?php

namespace Nordlet\Public_\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class InvoicesGetPublicResponseLinesItem extends JsonSerializableType
{
    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var ?string $unitPrice
     */
    #[JsonProperty('unitPrice')]
    public ?string $unitPrice;

    /**
     * @var string $vatRatePercent
     */
    #[JsonProperty('vatRatePercent')]
    public string $vatRatePercent;

    /**
     * @var string $lineNet
     */
    #[JsonProperty('lineNet')]
    public string $lineNet;

    /**
     * @param array{
     *   description: string,
     *   unit: string,
     *   quantity: string,
     *   vatRatePercent: string,
     *   lineNet: string,
     *   unitPrice?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->description = $values['description'];
        $this->unit = $values['unit'];
        $this->quantity = $values['quantity'];
        $this->unitPrice = $values['unitPrice'] ?? null;
        $this->vatRatePercent = $values['vatRatePercent'];
        $this->lineNet = $values['lineNet'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
