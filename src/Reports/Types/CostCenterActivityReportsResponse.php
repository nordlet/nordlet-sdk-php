<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class CostCenterActivityReportsResponse extends JsonSerializableType
{
    /**
     * @var CostCenterActivityReportsResponseCostCenter $costCenter
     */
    #[JsonProperty('costCenter')]
    public CostCenterActivityReportsResponseCostCenter $costCenter;

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
     * @var array<CostCenterActivityReportsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([CostCenterActivityReportsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   costCenter: CostCenterActivityReportsResponseCostCenter,
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   rows: array<CostCenterActivityReportsResponseRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->costCenter = $values['costCenter'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->rows = $values['rows'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
