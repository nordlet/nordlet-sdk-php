<?php

namespace Nordlet\Purchases\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1PurchasesOrdersSubmitResponse extends JsonSerializableType
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
     * @var value-of<PostV1PurchasesOrdersSubmitResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $orderNumber
     */
    #[JsonProperty('orderNumber')]
    public string $orderNumber;

    /**
     * @var string $orderDate
     */
    #[JsonProperty('orderDate')]
    public string $orderDate;

    /**
     * @var ?string $expectedDate
     */
    #[JsonProperty('expectedDate')]
    public ?string $expectedDate;

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
     * @var ?string $approvedAt
     */
    #[JsonProperty('approvedAt')]
    public ?string $approvedAt;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @var array<PostV1PurchasesOrdersSubmitResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1PurchasesOrdersSubmitResponseLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   id: string,
     *   partnerId: string,
     *   status: value-of<PostV1PurchasesOrdersSubmitResponseStatus>,
     *   orderNumber: string,
     *   orderDate: string,
     *   currency: string,
     *   netTotal: string,
     *   vatTotal: string,
     *   grossTotal: string,
     *   createdAt: string,
     *   updatedAt: string,
     *   lines: array<PostV1PurchasesOrdersSubmitResponseLinesItem>,
     *   expectedDate?: ?string,
     *   warehouseId?: ?string,
     *   approvedBy?: ?string,
     *   approvedAt?: ?string,
     *   notes?: ?string,
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
