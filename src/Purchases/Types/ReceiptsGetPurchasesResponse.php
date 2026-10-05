<?php

namespace Nordlet\Purchases\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class ReceiptsGetPurchasesResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orderId
     */
    #[JsonProperty('orderId')]
    public string $orderId;

    /**
     * @var string $receiptNumber
     */
    #[JsonProperty('receiptNumber')]
    public string $receiptNumber;

    /**
     * @var DateTime $receiptDate
     */
    #[JsonProperty('receiptDate'), Date(Date::TYPE_DATE)]
    public DateTime $receiptDate;

    /**
     * @var string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public string $warehouseId;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var array<ReceiptsGetPurchasesResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([ReceiptsGetPurchasesResponseLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   id: string,
     *   orderId: string,
     *   receiptNumber: string,
     *   receiptDate: DateTime,
     *   warehouseId: string,
     *   createdAt: DateTime,
     *   lines: array<ReceiptsGetPurchasesResponseLinesItem>,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->orderId = $values['orderId'];
        $this->receiptNumber = $values['receiptNumber'];
        $this->receiptDate = $values['receiptDate'];
        $this->warehouseId = $values['warehouseId'];
        $this->notes = $values['notes'] ?? null;
        $this->createdAt = $values['createdAt'];
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
