<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class InvitesListAccountResponse extends JsonSerializableType
{
    /**
     * @var array<InvitesListAccountResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([InvitesListAccountResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<InvitesListAccountResponseRowsItem>,
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
