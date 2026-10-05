<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class StatementRowsSchemesLedgerResponse extends JsonSerializableType
{
    /**
     * @var array<StatementRowsSchemesLedgerResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([StatementRowsSchemesLedgerResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<StatementRowsSchemesLedgerResponseRowsItem>,
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
