<?php

namespace Nordlet\Purchases\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class OrdersClosePurchasesResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var value-of<OrdersClosePurchasesResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $orderNumber
     */
    #[JsonProperty('orderNumber')]
    public string $orderNumber;

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
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var string $netTotal
     */
    #[JsonProperty('netTotal')]
    public string $netTotal;

    /**
     * @var string $vatTotal
     */
    #[JsonProperty('vatTotal')]
    public string $vatTotal;

    /**
     * @var string $grossTotal
     */
    #[JsonProperty('grossTotal')]
    public string $grossTotal;

    /**
     * @var ?string $approvedBy
     */
    #[JsonProperty('approvedBy')]
    public ?string $approvedBy;

    /**
     * @var ?DateTime $approvedAt
     */
    #[JsonProperty('approvedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $approvedAt;

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
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var array<OrdersClosePurchasesResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([OrdersClosePurchasesResponseLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   id: string,
     *   partnerId: string,
     *   status: value-of<OrdersClosePurchasesResponseStatus>,
     *   orderNumber: string,
     *   orderDate: DateTime,
     *   currency: string,
     *   netTotal: string,
     *   vatTotal: string,
     *   grossTotal: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   lines: array<OrdersClosePurchasesResponseLinesItem>,
     *   expectedDate?: ?DateTime,
     *   warehouseId?: ?string,
     *   approvedBy?: ?string,
     *   approvedAt?: ?DateTime,
     *   notes?: ?string,
     *   documentRef?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->partnerId = $values['partnerId'];
        $this->status = $values['status'];
        $this->orderNumber = $values['orderNumber'];
        $this->orderDate = $values['orderDate'];
        $this->expectedDate = $values['expectedDate'] ?? null;
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->currency = $values['currency'];
        $this->netTotal = $values['netTotal'];
        $this->vatTotal = $values['vatTotal'];
        $this->grossTotal = $values['grossTotal'];
        $this->approvedBy = $values['approvedBy'] ?? null;
        $this->approvedAt = $values['approvedAt'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->documentRef = $values['documentRef'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->lines = $values['lines'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
