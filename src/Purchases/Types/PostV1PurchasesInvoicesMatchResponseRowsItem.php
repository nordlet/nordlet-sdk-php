<?php

namespace Nordlet\Purchases\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PurchasesInvoicesMatchResponseRowsItem extends JsonSerializableType
{
    /**
     * @var ?string $itemId
     */
    #[JsonProperty('itemId')]
    public ?string $itemId;

    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @var string $orderedQty
     */
    #[JsonProperty('orderedQty')]
    public string $orderedQty;

    /**
     * @var string $receivedQty
     */
    #[JsonProperty('receivedQty')]
    public string $receivedQty;

    /**
     * @var string $invoicedQty
     */
    #[JsonProperty('invoicedQty')]
    public string $invoicedQty;

    /**
     * @var ?string $orderedUnitPrice
     */
    #[JsonProperty('orderedUnitPrice')]
    public ?string $orderedUnitPrice;

    /**
     * @var ?string $invoicedUnitPrice
     */
    #[JsonProperty('invoicedUnitPrice')]
    public ?string $invoicedUnitPrice;

    /**
     * @var ?string $priceVariancePercent
     */
    #[JsonProperty('priceVariancePercent')]
    public ?string $priceVariancePercent;

    /**
     * @var value-of<PostV1PurchasesInvoicesMatchResponseRowsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   description: string,
     *   orderedQty: string,
     *   receivedQty: string,
     *   invoicedQty: string,
     *   status: value-of<PostV1PurchasesInvoicesMatchResponseRowsItemStatus>,
     *   itemId?: ?string,
     *   orderedUnitPrice?: ?string,
     *   invoicedUnitPrice?: ?string,
     *   priceVariancePercent?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemId = $values['itemId'] ?? null;
        $this->description = $values['description'];
        $this->orderedQty = $values['orderedQty'];
        $this->receivedQty = $values['receivedQty'];
        $this->invoicedQty = $values['invoicedQty'];
        $this->orderedUnitPrice = $values['orderedUnitPrice'] ?? null;
        $this->invoicedUnitPrice = $values['invoicedUnitPrice'] ?? null;
        $this->priceVariancePercent = $values['priceVariancePercent'] ?? null;
        $this->status = $values['status'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
