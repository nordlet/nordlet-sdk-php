<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1LedgerStatementRowsSchemesResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1LedgerStatementRowsSchemesResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1LedgerStatementRowsSchemesResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1LedgerStatementRowsSchemesResponseRowsItem>,
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
