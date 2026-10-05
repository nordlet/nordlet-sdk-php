<?php

namespace Nordlet\Purchases\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Purchases\Types\ReceiptsCreatePurchasesRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class ReceiptsCreatePurchasesRequest extends JsonSerializableType
{
    /**
     * @var string $orderId
     */
    #[JsonProperty('orderId')]
    public string $orderId;

    /**
     * @var DateTime $receiptDate
     */
    #[JsonProperty('receiptDate'), Date(Date::TYPE_DATE)]
    public DateTime $receiptDate;

    /**
     * @var ?string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public ?string $warehouseId;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var array<ReceiptsCreatePurchasesRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([ReceiptsCreatePurchasesRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   orderId: string,
     *   receiptDate: DateTime,
     *   lines: array<ReceiptsCreatePurchasesRequestLinesItem>,
     *   warehouseId?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->orderId = $values['orderId'];
        $this->receiptDate = $values['receiptDate'];
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->lines = $values['lines'];
    }
}
