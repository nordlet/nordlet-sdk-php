<?php

namespace Nordlet\Purchases\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Purchases\Types\PostV1PurchasesOrdersUpdateRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class PostV1PurchasesOrdersUpdateRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?string $orderDate
     */
    #[JsonProperty('orderDate')]
    public ?string $orderDate;

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
     * @var ?array<PostV1PurchasesOrdersUpdateRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1PurchasesOrdersUpdateRequestLinesItem::class])]
    public ?array $lines;

    /**
     * @param array{
     *   id: string,
     *   partnerId?: ?string,
     *   orderDate?: ?string,
     *   expectedDate?: ?string,
     *   warehouseId?: ?string,
     *   currency?: ?string,
     *   notes?: ?string,
     *   lines?: ?array<PostV1PurchasesOrdersUpdateRequestLinesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->partnerId = $values['partnerId'] ?? null;
        $this->orderDate = $values['orderDate'] ?? null;
        $this->expectedDate = $values['expectedDate'] ?? null;
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->lines = $values['lines'] ?? null;
    }
}
