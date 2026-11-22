<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class GbP45GetDeclarationsResponseLastEntries extends JsonSerializableType
{
    /**
     * @var ?float $weekNumber
     */
    #[JsonProperty('weekNumber')]
    public ?float $weekNumber;

    /**
     * @var ?float $monthNumber
     */
    #[JsonProperty('monthNumber')]
    public ?float $monthNumber;

    /**
     * @var DateTime $totalPayToDate
     */
    #[JsonProperty('totalPayToDate'), Date(Date::TYPE_DATE)]
    public DateTime $totalPayToDate;

    /**
     * @var DateTime $totalTaxToDate
     */
    #[JsonProperty('totalTaxToDate'), Date(Date::TYPE_DATE)]
    public DateTime $totalTaxToDate;

    /**
     * @param array{
     *   totalPayToDate: DateTime,
     *   totalTaxToDate: DateTime,
     *   weekNumber?: ?float,
     *   monthNumber?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->weekNumber = $values['weekNumber'] ?? null;
        $this->monthNumber = $values['monthNumber'] ?? null;
        $this->totalPayToDate = $values['totalPayToDate'];
        $this->totalTaxToDate = $values['totalTaxToDate'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
