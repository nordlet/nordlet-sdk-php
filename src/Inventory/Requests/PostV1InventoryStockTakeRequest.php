<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Inventory\Types\PostV1InventoryStockTakeRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class PostV1InventoryStockTakeRequest extends JsonSerializableType
{
    /**
     * @var string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public string $warehouseId;

    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var ?string $expenseAccountCode
     */
    #[JsonProperty('expenseAccountCode')]
    public ?string $expenseAccountCode;

    /**
     * @var ?string $inventoryAccountCode
     */
    #[JsonProperty('inventoryAccountCode')]
    public ?string $inventoryAccountCode;

    /**
     * @var array<PostV1InventoryStockTakeRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1InventoryStockTakeRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   warehouseId: string,
     *   date: string,
     *   lines: array<PostV1InventoryStockTakeRequestLinesItem>,
     *   expenseAccountCode?: ?string,
     *   inventoryAccountCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->warehouseId = $values['warehouseId'];
        $this->date = $values['date'];
        $this->expenseAccountCode = $values['expenseAccountCode'] ?? null;
        $this->inventoryAccountCode = $values['inventoryAccountCode'] ?? null;
        $this->lines = $values['lines'];
    }
}
