<?php

namespace Nordlet\Cash\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ExpenseReportsCreateCashRequestLinesItem extends JsonSerializableType
{
    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @var ?string $documentNumber
     */
    #[JsonProperty('documentNumber')]
    public ?string $documentNumber;

    /**
     * @var string $accountCode
     */
    #[JsonProperty('accountCode')]
    public string $accountCode;

    /**
     * @var string $netAmount
     */
    #[JsonProperty('netAmount')]
    public string $netAmount;

    /**
     * @var ?string $vatAmount
     */
    #[JsonProperty('vatAmount')]
    public ?string $vatAmount;

    /**
     * @param array{
     *   description: string,
     *   accountCode: string,
     *   netAmount: string,
     *   documentNumber?: ?string,
     *   vatAmount?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->description = $values['description'];
        $this->documentNumber = $values['documentNumber'] ?? null;
        $this->accountCode = $values['accountCode'];
        $this->netAmount = $values['netAmount'];
        $this->vatAmount = $values['vatAmount'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
