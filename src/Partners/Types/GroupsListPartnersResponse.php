<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class GroupsListPartnersResponse extends JsonSerializableType
{
    /**
     * @var array<GroupsListPartnersResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([GroupsListPartnersResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<GroupsListPartnersResponseRowsItem>,
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
