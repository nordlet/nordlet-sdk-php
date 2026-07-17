<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1InventoryStockTakeResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1InventoryStockTakeResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1InventoryStockTakeResponseRowsItem::class])]
    public array $rows;

    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @param array{
     *   rows: array<PostV1InventoryStockTakeResponseRowsItem>,
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
