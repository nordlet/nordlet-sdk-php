<?php

namespace Nordlet\Purchases\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class InvoicesMatchPurchasesResponse extends JsonSerializableType
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
     * @var value-of<InvoicesMatchPurchasesResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var array<InvoicesMatchPurchasesResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([InvoicesMatchPurchasesResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   invoiceId: string,
     *   orderId: string,
     *   status: value-of<InvoicesMatchPurchasesResponseStatus>,
     *   rows: array<InvoicesMatchPurchasesResponseRowsItem>,
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
