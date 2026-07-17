<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReportsPartnerBalancesResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1ReportsPartnerBalancesResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ReportsPartnerBalancesResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1ReportsPartnerBalancesResponseRowsItem>,
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
