<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class LandedCostsGetInventoryResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var value-of<LandedCostsGetInventoryResponseMethod> $method
     */
    #[JsonProperty('method')]
    public string $method;

    /**
     * @var ?string $goodsReceiptId
     */
    #[JsonProperty('goodsReceiptId')]
    public ?string $goodsReceiptId;

    /**
     * @var ?string $sourceInvoiceId
     */
    #[JsonProperty('sourceInvoiceId')]
    public ?string $sourceInvoiceId;

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
     * @var array<LandedCostsGetInventoryResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([LandedCostsGetInventoryResponseLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   id: string,
     *   date: DateTime,
     *   amount: string,
     *   method: value-of<LandedCostsGetInventoryResponseMethod>,
     *   createdAt: DateTime,
     *   lines: array<LandedCostsGetInventoryResponseLinesItem>,
     *   goodsReceiptId?: ?string,
     *   sourceInvoiceId?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->date = $values['date'];
        $this->amount = $values['amount'];
        $this->method = $values['method'];
        $this->goodsReceiptId = $values['goodsReceiptId'] ?? null;
        $this->sourceInvoiceId = $values['sourceInvoiceId'] ?? null;
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
