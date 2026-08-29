<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1LedgerJournalTransactionsGetResponseEntriesItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $accountId
     */
    #[JsonProperty('accountId')]
    public string $accountId;

    /**
     * @var string $accountCode
     */
    #[JsonProperty('accountCode')]
    public string $accountCode;

    /**
     * @var string $accountName
     */
    #[JsonProperty('accountName')]
    public string $accountName;

    /**
     * @var ?string $costCenterId
     */
    #[JsonProperty('costCenterId')]
    public ?string $costCenterId;

    /**
     * @var ?string $projectId
     */
    #[JsonProperty('projectId')]
    public ?string $projectId;

    /**
     * @var string $debit
     */
    #[JsonProperty('debit')]
    public string $debit;

    /**
     * @var string $credit
     */
    #[JsonProperty('credit')]
    public string $credit;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @param array{
     *   id: string,
     *   accountId: string,
     *   accountCode: string,
     *   accountName: string,
     *   debit: string,
     *   credit: string,
     *   costCenterId?: ?string,
     *   projectId?: ?string,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->accountId = $values['accountId'];
        $this->accountCode = $values['accountCode'];
        $this->accountName = $values['accountName'];
        $this->costCenterId = $values['costCenterId'] ?? null;
        $this->projectId = $values['projectId'] ?? null;
        $this->debit = $values['debit'];
        $this->credit = $values['credit'];
        $this->description = $values['description'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
