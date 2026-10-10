<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class EuDigitalReportingListDeclarationsResponseTransactionsItemLinesItem extends JsonSerializableType
{
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
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var ?string $unitPrice
     */
    #[JsonProperty('unitPrice')]
    public ?string $unitPrice;

    /**
     * @var string $taxableAmount
     */
    #[JsonProperty('taxableAmount')]
    public string $taxableAmount;

    /**
     * @var string $vatRatePercent
     */
    #[JsonProperty('vatRatePercent')]
    public string $vatRatePercent;

    /**
     * @var string $vatAmount
     */
    #[JsonProperty('vatAmount')]
    public string $vatAmount;

    /**
     * @param array{
     *   description: string,
     *   quantity: string,
     *   unit: string,
     *   taxableAmount: string,
     *   vatRatePercent: string,
     *   vatAmount: string,
     *   unitPrice?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->description = $values['description'];
        $this->quantity = $values['quantity'];
        $this->unit = $values['unit'];
        $this->unitPrice = $values['unitPrice'] ?? null;
        $this->taxableAmount = $values['taxableAmount'];
        $this->vatRatePercent = $values['vatRatePercent'];
        $this->vatAmount = $values['vatAmount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
