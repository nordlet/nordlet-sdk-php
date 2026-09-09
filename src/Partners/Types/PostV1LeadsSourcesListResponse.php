<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1LeadsSourcesListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1LeadsSourcesListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1LeadsSourcesListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1LeadsSourcesListResponseRowsItem>,
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
