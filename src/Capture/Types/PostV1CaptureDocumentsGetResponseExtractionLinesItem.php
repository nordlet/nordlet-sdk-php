<?php

namespace Nordlet\Capture\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1CaptureDocumentsGetResponseExtractionLinesItem extends JsonSerializableType
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
     * @var ?string $unit
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @var ?string $unitPriceExclVat
     */
    #[JsonProperty('unitPriceExclVat')]
    public ?string $unitPriceExclVat;

    /**
     * @var ?string $vatRatePercent
     */
    #[JsonProperty('vatRatePercent')]
    public ?string $vatRatePercent;

    /**
     * @var ?string $lineNet
     */
    #[JsonProperty('lineNet')]
    public ?string $lineNet;

    /**
     * @var ?string $lineVat
     */
    #[JsonProperty('lineVat')]
    public ?string $lineVat;

    /**
     * @var ?string $lineGross
     */
    #[JsonProperty('lineGross')]
    public ?string $lineGross;

    /**
     * @param array{
     *   description: string,
     *   quantity: string,
     *   unit?: ?string,
     *   unitPriceExclVat?: ?string,
     *   vatRatePercent?: ?string,
     *   lineNet?: ?string,
     *   lineVat?: ?string,
     *   lineGross?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->description = $values['description'];
        $this->quantity = $values['quantity'];
        $this->unit = $values['unit'] ?? null;
        $this->unitPriceExclVat = $values['unitPriceExclVat'] ?? null;
        $this->vatRatePercent = $values['vatRatePercent'] ?? null;
        $this->lineNet = $values['lineNet'] ?? null;
        $this->lineVat = $values['lineVat'] ?? null;
        $this->lineGross = $values['lineGross'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
