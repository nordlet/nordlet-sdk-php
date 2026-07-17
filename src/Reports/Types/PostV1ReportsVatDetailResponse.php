<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReportsVatDetailResponse extends JsonSerializableType
{
    /**
     * @var string $side
     */
    #[JsonProperty('side')]
    public string $side;

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
     * @var array<PostV1ReportsVatDetailResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ReportsVatDetailResponseRowsItem::class])]
    public array $rows;

    /**
     * @var PostV1ReportsVatDetailResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public PostV1ReportsVatDetailResponseTotals $totals;

    /**
     * @param array{
     *   side: string,
     *   fromDate: string,
     *   toDate: string,
     *   rows: array<PostV1ReportsVatDetailResponseRowsItem>,
     *   totals: PostV1ReportsVatDetailResponseTotals,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->side = $values['side'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->rows = $values['rows'];
        $this->totals = $values['totals'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
