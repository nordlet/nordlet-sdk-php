<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1BankPaymentsExportRequest extends JsonSerializableType
{
    /**
     * @var string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public string $bankAccountId;

    /**
     * @var array<string> $purchaseInvoiceIds
     */
    #[JsonProperty('purchaseInvoiceIds'), ArrayType(['string'])]
    public array $purchaseInvoiceIds;

    /**
     * @var ?string $executionDate
     */
    #[JsonProperty('executionDate')]
    public ?string $executionDate;

    /**
     * @param array{
     *   bankAccountId: string,
     *   purchaseInvoiceIds: array<string>,
     *   executionDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bankAccountId = $values['bankAccountId'];
        $this->purchaseInvoiceIds = $values['purchaseInvoiceIds'];
        $this->executionDate = $values['executionDate'] ?? null;
    }
}
