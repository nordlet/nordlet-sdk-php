<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PlKsefReceivedListDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var array<PlKsefReceivedListDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PlKsefReceivedListDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PlKsefReceivedListDeclarationsResponseRowsItem>,
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
