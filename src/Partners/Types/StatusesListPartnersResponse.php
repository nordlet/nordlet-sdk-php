<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class StatusesListPartnersResponse extends JsonSerializableType
{
    /**
     * @var array<StatusesListPartnersResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([StatusesListPartnersResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<StatusesListPartnersResponseRowsItem>,
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
