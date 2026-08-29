<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Inventory\Types\PostV1InventoryLandedCostsCreateRequestMethod;
use Nordlet\Core\Types\ArrayType;

class PostV1InventoryLandedCostsCreateRequest extends JsonSerializableType
{
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
     * @var ?value-of<PostV1InventoryLandedCostsCreateRequestMethod> $method
     */
    #[JsonProperty('method')]
    public ?string $method;

    /**
     * @var ?string $goodsReceiptId
     */
    #[JsonProperty('goodsReceiptId')]
    public ?string $goodsReceiptId;

    /**
     * @var ?array<string> $movementIds
     */
    #[JsonProperty('movementIds'), ArrayType(['string'])]
    public ?array $movementIds;

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
     * @param array{
     *   date: string,
     *   amount: string,
     *   method?: ?value-of<PostV1InventoryLandedCostsCreateRequestMethod>,
     *   goodsReceiptId?: ?string,
     *   movementIds?: ?array<string>,
     *   sourceInvoiceId?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'];
        $this->amount = $values['amount'];
        $this->method = $values['method'] ?? null;
        $this->goodsReceiptId = $values['goodsReceiptId'] ?? null;
        $this->movementIds = $values['movementIds'] ?? null;
        $this->sourceInvoiceId = $values['sourceInvoiceId'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
