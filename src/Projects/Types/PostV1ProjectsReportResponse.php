<?php

namespace Nordlet\Projects\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ProjectsReportResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1ProjectsReportResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ProjectsReportResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1ProjectsReportResponseRowsItem>,
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
