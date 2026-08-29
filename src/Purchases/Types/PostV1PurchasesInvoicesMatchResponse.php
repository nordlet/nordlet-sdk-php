<?php

namespace Nordlet\Purchases\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1PurchasesInvoicesMatchResponse extends JsonSerializableType
{
    /**
     * @var string $invoiceId
     */
    #[JsonProperty('invoiceId')]
    public string $invoiceId;

    /**
     * @var string $orderId
     */
    #[JsonProperty('orderId')]
    public string $orderId;

    /**
     * @var value-of<PostV1PurchasesInvoicesMatchResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var array<PostV1PurchasesInvoicesMatchResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1PurchasesInvoicesMatchResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   invoiceId: string,
     *   orderId: string,
     *   status: value-of<PostV1PurchasesInvoicesMatchResponseStatus>,
     *   rows: array<PostV1PurchasesInvoicesMatchResponseRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->invoiceId = $values['invoiceId'];
        $this->orderId = $values['orderId'];
        $this->status = $values['status'];
        $this->rows = $values['rows'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
