<?php

namespace Nordlet\Purchases\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Purchases\Types\OrdersUpdatePurchasesRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class OrdersUpdatePurchasesRequest extends JsonSerializableType
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
     * @var ?DateTime $orderDate
     */
    #[JsonProperty('orderDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $orderDate;

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
     * @var ?array<OrdersUpdatePurchasesRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([OrdersUpdatePurchasesRequestLinesItem::class])]
    public ?array $lines;

    /**
     * @param array{
     *   id: string,
     *   partnerId?: ?string,
     *   orderDate?: ?DateTime,
     *   expectedDate?: ?DateTime,
     *   warehouseId?: ?string,
     *   currency?: ?string,
     *   notes?: ?string,
     *   lines?: ?array<OrdersUpdatePurchasesRequestLinesItem>,
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
