<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ExchangeRatesListReferenceResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $baseCurrency
     */
    #[JsonProperty('baseCurrency')]
    public string $baseCurrency;

    /**
     * @var string $currencyCode
     */
    #[JsonProperty('currencyCode')]
    public string $currencyCode;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var string $rate
     */
    #[JsonProperty('rate')]
    public string $rate;

    /**
     * @param array{
     *   baseCurrency: string,
     *   currencyCode: string,
     *   date: DateTime,
     *   rate: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->baseCurrency = $values['baseCurrency'];
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
