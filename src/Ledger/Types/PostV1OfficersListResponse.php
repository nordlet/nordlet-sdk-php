<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1OfficersListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1OfficersListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1OfficersListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1OfficersListResponseRowsItem>,
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
