<?php

namespace Nordlet\Purchases\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class InvoicesProposeLinesPurchasesRequestLinesItem extends JsonSerializableType
{
    /**
     * @var ?string $itemId
     */
    #[JsonProperty('itemId')]
    public ?string $itemId;

    /**
     * @var ?string $vatRatePercent
     */
    #[JsonProperty('vatRatePercent')]
    public ?string $vatRatePercent;

    /**
     * @var ?string $vatAmount
     */
    #[JsonProperty('vatAmount')]
    public ?string $vatAmount;

    /**
     * @param array{
     *   itemId?: ?string,
     *   vatRatePercent?: ?string,
     *   vatAmount?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->itemId = $values['itemId'] ?? null;
        $this->vatRatePercent = $values['vatRatePercent'] ?? null;
        $this->vatAmount = $values['vatAmount'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
