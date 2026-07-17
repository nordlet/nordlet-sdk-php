<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReportsMonthlySummaryResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1ReportsMonthlySummaryResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ReportsMonthlySummaryResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1ReportsMonthlySummaryResponseRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
