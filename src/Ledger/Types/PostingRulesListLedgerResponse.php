<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostingRulesListLedgerResponse extends JsonSerializableType
{
    /**
     * @var array<PostingRulesListLedgerResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostingRulesListLedgerResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostingRulesListLedgerResponseRowsItem>,
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
