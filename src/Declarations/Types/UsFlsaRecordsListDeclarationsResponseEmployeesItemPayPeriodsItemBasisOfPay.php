<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsFlsaRecordsListDeclarationsResponseEmployeesItemPayPeriodsItemBasisOfPay extends JsonSerializableType
{
    /**
     * @var string $salaryType
     */
    #[JsonProperty('salaryType')]
    public string $salaryType;

    /**
     * @var string $rate
     */
    #[JsonProperty('rate')]
    public string $rate;

    /**
     * @param array{
     *   salaryType: string,
     *   rate: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->salaryType = $values['salaryType'];
        $this->rate = $values['rate'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
