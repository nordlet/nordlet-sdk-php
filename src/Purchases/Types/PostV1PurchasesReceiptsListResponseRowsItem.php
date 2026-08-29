<?php

namespace Nordlet\Purchases\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PurchasesReceiptsListResponseRowsItem extends JsonSerializableType
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
     * @var string $receiptDate
     */
    #[JsonProperty('receiptDate')]
    public string $receiptDate;

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
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   orderId: string,
     *   receiptNumber: string,
     *   receiptDate: string,
     *   warehouseId: string,
     *   createdAt: string,
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
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
