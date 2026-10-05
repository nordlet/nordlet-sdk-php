<?php

namespace Nordlet\Projects\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ReportProjectsResponse extends JsonSerializableType
{
    /**
     * @var array<ReportProjectsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([ReportProjectsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<ReportProjectsResponseRowsItem>,
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
