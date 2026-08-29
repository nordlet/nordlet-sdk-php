<?php

namespace Nordlet\Purchases\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Purchases\Types\PostV1PurchasesReceiptsCreateRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class PostV1PurchasesReceiptsCreateRequest extends JsonSerializableType
{
    /**
     * @var string $orderId
     */
    #[JsonProperty('orderId')]
    public string $orderId;

    /**
     * @var string $receiptDate
     */
    #[JsonProperty('receiptDate')]
    public string $receiptDate;

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
     * @var array<PostV1PurchasesReceiptsCreateRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1PurchasesReceiptsCreateRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   orderId: string,
     *   receiptDate: string,
     *   lines: array<PostV1PurchasesReceiptsCreateRequestLinesItem>,
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
