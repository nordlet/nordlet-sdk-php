<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ExchangeRatesOverridesDeleteReferenceRequest extends JsonSerializableType
{
    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @param array{
     *   currency: string,
     *   date: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->currency = $values['currency'];
        $this->date = $values['date'];
    }
}
