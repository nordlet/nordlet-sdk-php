<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class WriteOffActsReportsResponse extends JsonSerializableType
{
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
     * @var array<WriteOffActsReportsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([WriteOffActsReportsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var string $totalCost
     */
    #[JsonProperty('totalCost')]
    public string $totalCost;

    /**
     * @param array{
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   rows: array<WriteOffActsReportsResponseRowsItem>,
     *   totalCost: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->rows = $values['rows'];
        $this->totalCost = $values['totalCost'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
