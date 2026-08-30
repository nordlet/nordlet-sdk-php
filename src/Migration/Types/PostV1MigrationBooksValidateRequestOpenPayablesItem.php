<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1MigrationBooksValidateRequestOpenPayablesItem extends JsonSerializableType
{
    /**
     * @var string $partnerCode
     */
    #[JsonProperty('partnerCode')]
    public string $partnerCode;

    /**
     * @var ?string $dueDate
     */
    #[JsonProperty('dueDate')]
    public ?string $dueDate;

    /**
     * @var ?string $currency
     */
    #[JsonProperty('currency')]
    public ?string $currency;

    /**
     * @var string $grossTotal
     */
    #[JsonProperty('grossTotal')]
    public string $grossTotal;

    /**
     * @var ?string $vatTotal
     */
    #[JsonProperty('vatTotal')]
    public ?string $vatTotal;

    /**
     * @var ?string $outstanding
     */
    #[JsonProperty('outstanding')]
    public ?string $outstanding;

    /**
     * @var ?string $fxRate
     */
    #[JsonProperty('fxRate')]
    public ?string $fxRate;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var string $documentNumber
     */
    #[JsonProperty('documentNumber')]
    public string $documentNumber;

    /**
     * @var string $documentDate
     */
    #[JsonProperty('documentDate')]
    public string $documentDate;

    /**
     * @param array{
     *   partnerCode: string,
     *   grossTotal: string,
     *   documentNumber: string,
     *   documentDate: string,
     *   dueDate?: ?string,
     *   currency?: ?string,
     *   vatTotal?: ?string,
     *   outstanding?: ?string,
     *   fxRate?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerCode = $values['partnerCode'];
        $this->dueDate = $values['dueDate'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->grossTotal = $values['grossTotal'];
        $this->vatTotal = $values['vatTotal'] ?? null;
        $this->outstanding = $values['outstanding'] ?? null;
        $this->fxRate = $values['fxRate'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->documentNumber = $values['documentNumber'];
        $this->documentDate = $values['documentDate'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
