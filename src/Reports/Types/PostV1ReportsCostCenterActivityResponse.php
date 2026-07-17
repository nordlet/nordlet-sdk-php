<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReportsCostCenterActivityResponse extends JsonSerializableType
{
    /**
     * @var PostV1ReportsCostCenterActivityResponseCostCenter $costCenter
     */
    #[JsonProperty('costCenter')]
    public PostV1ReportsCostCenterActivityResponseCostCenter $costCenter;

    /**
     * @var string $fromDate
     */
    #[JsonProperty('fromDate')]
    public string $fromDate;

    /**
     * @var string $toDate
     */
    #[JsonProperty('toDate')]
    public string $toDate;

    /**
     * @var array<PostV1ReportsCostCenterActivityResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ReportsCostCenterActivityResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   costCenter: PostV1ReportsCostCenterActivityResponseCostCenter,
     *   fromDate: string,
     *   toDate: string,
     *   rows: array<PostV1ReportsCostCenterActivityResponseRowsItem>,
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
