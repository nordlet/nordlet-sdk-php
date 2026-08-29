<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1InventoryLandedCostsGetResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var value-of<PostV1InventoryLandedCostsGetResponseMethod> $method
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
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var array<PostV1InventoryLandedCostsGetResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1InventoryLandedCostsGetResponseLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   id: string,
     *   date: string,
     *   amount: string,
     *   method: value-of<PostV1InventoryLandedCostsGetResponseMethod>,
     *   createdAt: string,
     *   lines: array<PostV1InventoryLandedCostsGetResponseLinesItem>,
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
