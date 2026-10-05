<?php

namespace Nordlet\Cash\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class AdvanceHoldersBalancesCashResponse extends JsonSerializableType
{
    /**
     * @var array<AdvanceHoldersBalancesCashResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([AdvanceHoldersBalancesCashResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<AdvanceHoldersBalancesCashResponseRowsItem>,
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
