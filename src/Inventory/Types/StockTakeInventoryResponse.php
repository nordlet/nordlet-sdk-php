<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class StockTakeInventoryResponse extends JsonSerializableType
{
    /**
     * @var array<StockTakeInventoryResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([StockTakeInventoryResponseRowsItem::class])]
    public array $rows;

    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @param array{
     *   rows: array<StockTakeInventoryResponseRowsItem>,
     *   journalTransactionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rows = $values['rows'];
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
