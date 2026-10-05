<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use DateTime;
use Nordlet\Core\Types\Date;

class DirectDebitsExportBankRequest extends JsonSerializableType
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
     * @var ?DateTime $collectionDate
     */
    #[JsonProperty('collectionDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $collectionDate;

    /**
     * @param array{
     *   bankAccountId: string,
     *   saleInvoiceIds: array<string>,
     *   collectionDate?: ?DateTime,
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
