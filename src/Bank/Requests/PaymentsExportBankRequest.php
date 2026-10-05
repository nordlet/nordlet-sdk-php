<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use DateTime;
use Nordlet\Core\Types\Date;

class PaymentsExportBankRequest extends JsonSerializableType
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
     * @var ?DateTime $executionDate
     */
    #[JsonProperty('executionDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $executionDate;

    /**
     * @param array{
     *   bankAccountId: string,
     *   purchaseInvoiceIds: array<string>,
     *   executionDate?: ?DateTime,
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
