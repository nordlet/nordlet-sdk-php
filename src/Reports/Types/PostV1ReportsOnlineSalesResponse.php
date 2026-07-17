<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReportsOnlineSalesResponse extends JsonSerializableType
{
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
     * @var array<PostV1ReportsOnlineSalesResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ReportsOnlineSalesResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   fromDate: string,
     *   toDate: string,
     *   rows: array<PostV1ReportsOnlineSalesResponseRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
