<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class UsFlsaRecordsListDeclarationsResponseEmployeesItemWorkweeksItemDaysItem extends JsonSerializableType
{
    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var string $hours
     */
    #[JsonProperty('hours')]
    public string $hours;

    /**
     * @param array{
     *   date: DateTime,
     *   hours: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'];
        $this->hours = $values['hours'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
