<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class AutomationListDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var array<AutomationListDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([AutomationListDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<AutomationListDeclarationsResponseRowsItem>,
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
