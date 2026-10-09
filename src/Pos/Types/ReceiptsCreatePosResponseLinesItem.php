<?php

namespace Nordlet\Pos\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ReceiptsCreatePosResponseLinesItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var string $netAmount
     */
    #[JsonProperty('netAmount')]
    public string $netAmount;

    /**
     * @var string $vatAmount
     */
    #[JsonProperty('vatAmount')]
    public string $vatAmount;

    /**
     * @var string $grossAmount
     */
    #[JsonProperty('grossAmount')]
    public string $grossAmount;

    /**
     * @param array{
     *   id: string,
     *   description: string,
     *   quantity: string,
     *   unitPriceInclVat: string,
     *   vatRatePercent: string,
     *   netAmount: string,
     *   vatAmount: string,
     *   grossAmount: string,
     *   itemId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->itemId = $values['itemId'] ?? null;
        $this->description = $values['description'];
        $this->quantity = $values['quantity'];
        $this->unitPriceInclVat = $values['unitPriceInclVat'];
        $this->vatRatePercent = $values['vatRatePercent'];
        $this->netAmount = $values['netAmount'];
        $this->vatAmount = $values['vatAmount'];
        $this->grossAmount = $values['grossAmount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
