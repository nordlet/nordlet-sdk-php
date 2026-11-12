<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class PeriodChecklistReportsResponse extends JsonSerializableType
{
    /**
     * @var string $period
     */
    #[JsonProperty('period')]
    public string $period;

    /**
     * @var DateTime $fromDate
     */
    #[JsonProperty('fromDate'), Date(Date::TYPE_DATE)]
    public DateTime $fromDate;

    /**
     * @var DateTime $toDate
     */
    #[JsonProperty('toDate'), Date(Date::TYPE_DATE)]
    public DateTime $toDate;

    /**
     * @var array<PeriodChecklistReportsResponseItemsItem> $items
     */
    #[JsonProperty('items'), ArrayType([PeriodChecklistReportsResponseItemsItem::class])]
    public array $items;

    /**
     * @param array{
     *   period: string,
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   items: array<PeriodChecklistReportsResponseItemsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->period = $values['period'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->items = $values['items'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
