<?php

namespace Nordlet\Purchases\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Purchases\Types\PostV1PurchasesOrdersCreateRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class PostV1PurchasesOrdersCreateRequest extends JsonSerializableType
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
     * @var array<PostV1PurchasesOrdersCreateRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1PurchasesOrdersCreateRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   partnerId: string,
     *   orderDate: string,
     *   lines: array<PostV1PurchasesOrdersCreateRequestLinesItem>,
     *   orderNumber?: ?string,
     *   expectedDate?: ?string,
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
