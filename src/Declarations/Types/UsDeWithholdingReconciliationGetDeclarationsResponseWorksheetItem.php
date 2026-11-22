<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsDeWithholdingReconciliationGetDeclarationsResponseWorksheetItem extends JsonSerializableType
{
    /**
     * @var float $month
     */
    #[JsonProperty('month')]
    public float $month;

    /**
     * @var ?string $taxPaid
     */
    #[JsonProperty('taxPaid')]
    public ?string $taxPaid;

    /**
     * @var string $taxWithheld
     */
    #[JsonProperty('taxWithheld')]
    public string $taxWithheld;

    /**
     * @param array{
     *   month: float,
     *   taxWithheld: string,
     *   taxPaid?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->month = $values['month'];
        $this->taxPaid = $values['taxPaid'] ?? null;
        $this->taxWithheld = $values['taxWithheld'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
