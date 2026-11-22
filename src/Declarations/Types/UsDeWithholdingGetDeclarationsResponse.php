<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsDeWithholdingGetDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $from
     */
    #[JsonProperty('from')]
    public string $from;

    /**
     * @var string $to
     */
    #[JsonProperty('to')]
    public string $to;

    /**
     * @var float $employees
     */
    #[JsonProperty('employees')]
    public float $employees;

    /**
     * @var string $wages
     */
    #[JsonProperty('wages')]
    public string $wages;

    /**
     * @var string $taxWithheld
     */
    #[JsonProperty('taxWithheld')]
    public string $taxWithheld;

    /**
     * @var UsDeWithholdingGetDeclarationsResponseWthTax $wthTax
     */
    #[JsonProperty('wthTax')]
    public UsDeWithholdingGetDeclarationsResponseWthTax $wthTax;

    /**
     * @param array{
     *   from: string,
     *   to: string,
     *   employees: float,
     *   wages: string,
     *   taxWithheld: string,
     *   wthTax: UsDeWithholdingGetDeclarationsResponseWthTax,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->from = $values['from'];
        $this->to = $values['to'];
        $this->employees = $values['employees'];
        $this->wages = $values['wages'];
        $this->taxWithheld = $values['taxWithheld'];
        $this->wthTax = $values['wthTax'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
