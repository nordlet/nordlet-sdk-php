<?php

namespace Nordlet\Cash\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ExpenseReportsGetCashResponseLinesItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var string $vatAmount
     */
    #[JsonProperty('vatAmount')]
    public string $vatAmount;

    /**
     * @param array{
     *   id: string,
     *   description: string,
     *   accountCode: string,
     *   netAmount: string,
     *   vatAmount: string,
     *   documentNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->description = $values['description'];
        $this->documentNumber = $values['documentNumber'] ?? null;
        $this->accountCode = $values['accountCode'];
        $this->netAmount = $values['netAmount'];
        $this->vatAmount = $values['vatAmount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
