<?php

namespace Nordlet\Pos\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Pos\Types\ReportsCreatePosRequestVatLinesItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Pos\Types\ReportsCreatePosRequestItemLinesItem;

class ReportsCreatePosRequest extends JsonSerializableType
{
    /**
     * @var string $reportNumber
     */
    #[JsonProperty('reportNumber')]
    public string $reportNumber;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var ?string $deviceId
     */
    #[JsonProperty('deviceId')]
    public ?string $deviceId;

    /**
     * @var ?string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public ?string $warehouseId;

    /**
     * @var array<ReportsCreatePosRequestVatLinesItem> $vatLines
     */
    #[JsonProperty('vatLines'), ArrayType([ReportsCreatePosRequestVatLinesItem::class])]
    public array $vatLines;

    /**
     * @var ?string $cashAmount
     */
    #[JsonProperty('cashAmount')]
    public ?string $cashAmount;

    /**
     * @var ?string $cardAmount
     */
    #[JsonProperty('cardAmount')]
    public ?string $cardAmount;

    /**
     * @var ?array<ReportsCreatePosRequestItemLinesItem> $itemLines
     */
    #[JsonProperty('itemLines'), ArrayType([ReportsCreatePosRequestItemLinesItem::class])]
    public ?array $itemLines;

    /**
     * @var ?string $cashAccountCode
     */
    #[JsonProperty('cashAccountCode')]
    public ?string $cashAccountCode;

    /**
     * @var ?string $cardAccountCode
     */
    #[JsonProperty('cardAccountCode')]
    public ?string $cardAccountCode;

    /**
     * @var ?string $revenueAccountCode
     */
    #[JsonProperty('revenueAccountCode')]
    public ?string $revenueAccountCode;

    /**
     * @var ?string $vatAccountCode
     */
    #[JsonProperty('vatAccountCode')]
    public ?string $vatAccountCode;

    /**
     * @var ?string $cogsAccountCode
     */
    #[JsonProperty('cogsAccountCode')]
    public ?string $cogsAccountCode;

    /**
     * @var ?string $inventoryAccountCode
     */
    #[JsonProperty('inventoryAccountCode')]
    public ?string $inventoryAccountCode;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   reportNumber: string,
     *   date: DateTime,
     *   vatLines: array<ReportsCreatePosRequestVatLinesItem>,
     *   deviceId?: ?string,
     *   warehouseId?: ?string,
     *   cashAmount?: ?string,
     *   cardAmount?: ?string,
     *   itemLines?: ?array<ReportsCreatePosRequestItemLinesItem>,
     *   cashAccountCode?: ?string,
     *   cardAccountCode?: ?string,
     *   revenueAccountCode?: ?string,
     *   vatAccountCode?: ?string,
     *   cogsAccountCode?: ?string,
     *   inventoryAccountCode?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->reportNumber = $values['reportNumber'];
        $this->date = $values['date'];
        $this->deviceId = $values['deviceId'] ?? null;
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->vatLines = $values['vatLines'];
        $this->cashAmount = $values['cashAmount'] ?? null;
        $this->cardAmount = $values['cardAmount'] ?? null;
        $this->itemLines = $values['itemLines'] ?? null;
        $this->cashAccountCode = $values['cashAccountCode'] ?? null;
        $this->cardAccountCode = $values['cardAccountCode'] ?? null;
        $this->revenueAccountCode = $values['revenueAccountCode'] ?? null;
        $this->vatAccountCode = $values['vatAccountCode'] ?? null;
        $this->cogsAccountCode = $values['cogsAccountCode'] ?? null;
        $this->inventoryAccountCode = $values['inventoryAccountCode'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
