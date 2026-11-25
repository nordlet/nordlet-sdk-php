<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostingRulesListBankResponse extends JsonSerializableType
{
    /**
     * @var array<PostingRulesListBankResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostingRulesListBankResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostingRulesListBankResponseRowsItem>,
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
