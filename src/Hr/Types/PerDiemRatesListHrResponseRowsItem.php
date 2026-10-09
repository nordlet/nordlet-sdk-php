<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class PerDiemRatesListHrResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var string $validFrom
     */
    #[JsonProperty('validFrom')]
    public string $validFrom;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   countryCode: string,
     *   dailyAmount: string,
     *   validFrom: string,
     *   createdAt: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->countryCode = $values['countryCode'];
        $this->dailyAmount = $values['dailyAmount'];
        $this->validFrom = $values['validFrom'];
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
