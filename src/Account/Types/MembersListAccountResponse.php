<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class MembersListAccountResponse extends JsonSerializableType
{
    /**
     * @var array<MembersListAccountResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([MembersListAccountResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<MembersListAccountResponseRowsItem>,
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
