<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class DebtRemindersPreviewPartnersResponseRowsItemTotalsItem extends JsonSerializableType
{
    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var string $totalDue
     */
    #[JsonProperty('totalDue')]
    public string $totalDue;

    /**
     * @var string $interestDue
     */
    #[JsonProperty('interestDue')]
    public string $interestDue;

    /**
     * @param array{
     *   currency: string,
     *   totalDue: string,
     *   interestDue: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->currency = $values['currency'];
        $this->totalDue = $values['totalDue'];
        $this->interestDue = $values['interestDue'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
