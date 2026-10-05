<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Inventory\Types\StockTakeInventoryRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class StockTakeInventoryRequest extends JsonSerializableType
{
    /**
     * @var string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public string $warehouseId;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

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
     * @var array<StockTakeInventoryRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([StockTakeInventoryRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   warehouseId: string,
     *   date: DateTime,
     *   lines: array<StockTakeInventoryRequestLinesItem>,
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
