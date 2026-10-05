<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class TimesheetsListHrResponseRowsItemDaysItem extends JsonSerializableType
{
    /**
     * @var int $day
     */
    #[JsonProperty('day')]
    public int $day;

    /**
     * @var string $hours
     */
    #[JsonProperty('hours')]
    public string $hours;

    /**
     * @var value-of<TimesheetsListHrResponseRowsItemDaysItemType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @param array{
     *   day: int,
     *   hours: string,
     *   type: value-of<TimesheetsListHrResponseRowsItemDaysItemType>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->day = $values['day'];
        $this->hours = $values['hours'];
        $this->type = $values['type'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
