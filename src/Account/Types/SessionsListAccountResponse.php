<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class SessionsListAccountResponse extends JsonSerializableType
{
    /**
     * @var array<SessionsListAccountResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([SessionsListAccountResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<SessionsListAccountResponseRowsItem>,
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
