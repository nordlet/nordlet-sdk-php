<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ApiKeysListAccountResponse extends JsonSerializableType
{
    /**
     * @var array<ApiKeysListAccountResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([ApiKeysListAccountResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<ApiKeysListAccountResponseRowsItem>,
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
