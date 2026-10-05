<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostingRulesUpdateLedgerResponse extends JsonSerializableType
{
    /**
     * @var array<PostingRulesUpdateLedgerResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostingRulesUpdateLedgerResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostingRulesUpdateLedgerResponseRowsItem>,
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
