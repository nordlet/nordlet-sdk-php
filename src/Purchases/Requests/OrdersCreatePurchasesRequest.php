<?php

namespace Nordlet\Purchases\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Purchases\Types\OrdersCreatePurchasesRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class OrdersCreatePurchasesRequest extends JsonSerializableType
{
    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var ?string $orderNumber
     */
    #[JsonProperty('orderNumber')]
    public ?string $orderNumber;

    /**
     * @var DateTime $orderDate
     */
    #[JsonProperty('orderDate'), Date(Date::TYPE_DATE)]
    public DateTime $orderDate;

    /**
     * @var ?DateTime $expectedDate
     */
    #[JsonProperty('expectedDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $expectedDate;

    /**
     * @var ?string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public ?string $warehouseId;

    /**
     * @var ?string $currency
     */
    #[JsonProperty('currency')]
    public ?string $currency;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?string $documentRef
     */
    #[JsonProperty('documentRef')]
    public ?string $documentRef;

    /**
     * @var array<OrdersCreatePurchasesRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([OrdersCreatePurchasesRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   partnerId: string,
     *   orderDate: DateTime,
     *   lines: array<OrdersCreatePurchasesRequestLinesItem>,
     *   orderNumber?: ?string,
     *   expectedDate?: ?DateTime,
     *   warehouseId?: ?string,
     *   currency?: ?string,
     *   notes?: ?string,
     *   documentRef?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerId = $values['partnerId'];
        $this->orderNumber = $values['orderNumber'] ?? null;
        $this->orderDate = $values['orderDate'];
        $this->expectedDate = $values['expectedDate'] ?? null;
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->documentRef = $values['documentRef'] ?? null;
        $this->lines = $values['lines'];
    }
}
