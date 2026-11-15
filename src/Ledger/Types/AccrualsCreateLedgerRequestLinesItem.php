<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class AccrualsCreateLedgerRequestLinesItem extends JsonSerializableType
{
    /**
     * @var string $accountCode
     */
    #[JsonProperty('accountCode')]
    public string $accountCode;

    /**
     * @var ?string $debit
     */
    #[JsonProperty('debit')]
    public ?string $debit;

    /**
     * @var ?string $credit
     */
    #[JsonProperty('credit')]
    public ?string $credit;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @param array{
     *   accountCode: string,
     *   debit?: ?string,
     *   credit?: ?string,
     *   partnerId?: ?string,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accountCode = $values['accountCode'];
        $this->debit = $values['debit'] ?? null;
        $this->credit = $values['credit'] ?? null;
        $this->partnerId = $values['partnerId'] ?? null;
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
