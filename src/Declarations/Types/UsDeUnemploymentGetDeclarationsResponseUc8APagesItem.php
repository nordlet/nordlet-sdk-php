<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UsDeUnemploymentGetDeclarationsResponseUc8APagesItem extends JsonSerializableType
{
    /**
     * @var array<UsDeUnemploymentGetDeclarationsResponseUc8APagesItemRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([UsDeUnemploymentGetDeclarationsResponseUc8APagesItemRowsItem::class])]
    public array $rows;

    /**
     * @var string $line31
     */
    #[JsonProperty('line31')]
    public string $line31;

    /**
     * @param array{
     *   rows: array<UsDeUnemploymentGetDeclarationsResponseUc8APagesItemRowsItem>,
     *   line31: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rows = $values['rows'];
        $this->line31 = $values['line31'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
