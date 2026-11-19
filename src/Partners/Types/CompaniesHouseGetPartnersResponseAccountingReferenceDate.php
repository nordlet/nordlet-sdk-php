<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class CompaniesHouseGetPartnersResponseAccountingReferenceDate extends JsonSerializableType
{
    /**
     * @var int $day
     */
    #[JsonProperty('day')]
    public int $day;

    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @param array{
     *   day: int,
     *   month: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->day = $values['day'];
        $this->month = $values['month'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
