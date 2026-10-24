<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class DebtRemindersUpcomingPartnersResponse extends JsonSerializableType
{
    /**
     * @var array<DebtRemindersUpcomingPartnersResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([DebtRemindersUpcomingPartnersResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<DebtRemindersUpcomingPartnersResponseRowsItem>,
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
