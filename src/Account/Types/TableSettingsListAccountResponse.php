<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class TableSettingsListAccountResponse extends JsonSerializableType
{
    /**
     * @var array<TableSettingsListAccountResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([TableSettingsListAccountResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<TableSettingsListAccountResponseRowsItem>,
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
