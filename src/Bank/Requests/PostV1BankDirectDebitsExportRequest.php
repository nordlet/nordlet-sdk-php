<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1BankDirectDebitsExportRequest extends JsonSerializableType
{
    /**
     * @var string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public string $bankAccountId;

    /**
     * @var array<string> $saleInvoiceIds
     */
    #[JsonProperty('saleInvoiceIds'), ArrayType(['string'])]
    public array $saleInvoiceIds;

    /**
     * @var ?string $collectionDate
     */
    #[JsonProperty('collectionDate')]
    public ?string $collectionDate;

    /**
     * @param array{
     *   bankAccountId: string,
     *   saleInvoiceIds: array<string>,
     *   collectionDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bankAccountId = $values['bankAccountId'];
        $this->saleInvoiceIds = $values['saleInvoiceIds'];
        $this->collectionDate = $values['collectionDate'] ?? null;
    }
}
