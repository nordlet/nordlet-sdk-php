<?php

namespace Nordlet\Pos\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ReportsCreatePosRequestVatLinesItem extends JsonSerializableType
{
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
     * @param array{
     *   vatRatePercent: string,
     *   netAmount: string,
     *   vatAmount: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->vatRatePercent = $values['vatRatePercent'];
        $this->netAmount = $values['netAmount'];
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
