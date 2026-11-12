<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class TransactionsMatchBankRequestRemainder extends JsonSerializableType
{
    /**
     * @var value-of<TransactionsMatchBankRequestRemainderTreatment> $treatment
     */
    #[JsonProperty('treatment')]
    public string $treatment;

    /**
     * @var ?string $accountCode
     */
    #[JsonProperty('accountCode')]
    public ?string $accountCode;

    /**
     * @param array{
     *   treatment: value-of<TransactionsMatchBankRequestRemainderTreatment>,
     *   accountCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->treatment = $values['treatment'];
        $this->accountCode = $values['accountCode'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
