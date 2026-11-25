<?php

namespace Nordlet\Cash\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ExpenseReportsCreateCashResponseLinesItem extends JsonSerializableType
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
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?string $vatClassifierCode
     */
    #[JsonProperty('vatClassifierCode')]
    public ?string $vatClassifierCode;

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
     * @var ?string $deductibleVat
     */
    #[JsonProperty('deductibleVat')]
    public ?string $deductibleVat;

    /**
     * @param array{
     *   id: string,
     *   description: string,
     *   accountCode: string,
     *   netAmount: string,
     *   vatAmount: string,
     *   documentNumber?: ?string,
     *   partnerId?: ?string,
     *   vatClassifierCode?: ?string,
     *   deductibleVat?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->description = $values['description'];
        $this->documentNumber = $values['documentNumber'] ?? null;
        $this->accountCode = $values['accountCode'];
        $this->partnerId = $values['partnerId'] ?? null;
        $this->vatClassifierCode = $values['vatClassifierCode'] ?? null;
        $this->netAmount = $values['netAmount'];
        $this->vatAmount = $values['vatAmount'];
        $this->deductibleVat = $values['deductibleVat'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
