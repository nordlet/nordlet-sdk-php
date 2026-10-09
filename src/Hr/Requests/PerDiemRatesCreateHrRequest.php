<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class PerDiemRatesCreateHrRequest extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var string $dailyAmount
     */
    #[JsonProperty('dailyAmount')]
    public string $dailyAmount;

    /**
     * @var DateTime $validFrom
     */
    #[JsonProperty('validFrom'), Date(Date::TYPE_DATE)]
    public DateTime $validFrom;

    /**
     * @param array{
     *   countryCode: string,
     *   dailyAmount: string,
     *   validFrom: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->dailyAmount = $values['dailyAmount'];
        $this->validFrom = $values['validFrom'];
    }
}
