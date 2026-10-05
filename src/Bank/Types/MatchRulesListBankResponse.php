<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class MatchRulesListBankResponse extends JsonSerializableType
{
    /**
     * @var array<MatchRulesListBankResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([MatchRulesListBankResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<MatchRulesListBankResponseRowsItem>,
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
