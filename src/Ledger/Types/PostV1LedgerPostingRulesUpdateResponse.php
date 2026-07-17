<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1LedgerPostingRulesUpdateResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1LedgerPostingRulesUpdateResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1LedgerPostingRulesUpdateResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1LedgerPostingRulesUpdateResponseRowsItem>,
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
