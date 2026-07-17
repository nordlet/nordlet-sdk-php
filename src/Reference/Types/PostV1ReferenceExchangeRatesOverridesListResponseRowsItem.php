<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReferenceExchangeRatesOverridesListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $currencyCode
     */
    #[JsonProperty('currencyCode')]
    public string $currencyCode;

    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $rate
     */
    #[JsonProperty('rate')]
    public string $rate;

    /**
     * @param array{
     *   currencyCode: string,
     *   date: string,
     *   rate: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->currencyCode = $values['currencyCode'];
        $this->date = $values['date'];
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
