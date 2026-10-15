<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ImportTemplatesListBuiltinBankResponse extends JsonSerializableType
{
    /**
     * @var array<ImportTemplatesListBuiltinBankResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([ImportTemplatesListBuiltinBankResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<ImportTemplatesListBuiltinBankResponseRowsItem>,
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
