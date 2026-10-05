<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class EuVatRatesListReferenceRequest extends JsonSerializableType
{
    /**
     * @var ?string $countryCode
     */
    #[JsonProperty('countryCode')]
    public ?string $countryCode;

    /**
     * @var ?DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public ?DateTime $date;

    /**
     * @param array{
     *   countryCode?: ?string,
     *   date?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->countryCode = $values['countryCode'] ?? null;
        $this->date = $values['date'] ?? null;
    }
}
