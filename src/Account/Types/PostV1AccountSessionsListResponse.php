<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1AccountSessionsListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1AccountSessionsListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1AccountSessionsListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1AccountSessionsListResponseRowsItem>,
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
