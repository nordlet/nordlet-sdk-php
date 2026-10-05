<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class DebtRemindersPreviewPartnersResponse extends JsonSerializableType
{
    /**
     * @var array<DebtRemindersPreviewPartnersResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([DebtRemindersPreviewPartnersResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<DebtRemindersPreviewPartnersResponseRowsItem>,
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
