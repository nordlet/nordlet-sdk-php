<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbP45GetDeclarationsResponseThisEmployment extends JsonSerializableType
{
    /**
     * @var string $totalPay
     */
    #[JsonProperty('totalPay')]
    public string $totalPay;

    /**
     * @var string $totalTax
     */
    #[JsonProperty('totalTax')]
    public string $totalTax;

    /**
     * @param array{
     *   totalPay: string,
     *   totalTax: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->totalPay = $values['totalPay'];
        $this->totalTax = $values['totalTax'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
