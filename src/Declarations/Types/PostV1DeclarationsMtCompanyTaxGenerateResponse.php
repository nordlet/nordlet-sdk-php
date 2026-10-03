<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsMtCompanyTaxGenerateResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $yearOfAssessment
     */
    #[JsonProperty('yearOfAssessment')]
    public int $yearOfAssessment;

    /**
     * @var string $periodStart
     */
    #[JsonProperty('periodStart')]
    public string $periodStart;

    /**
     * @var string $periodEnd
     */
    #[JsonProperty('periodEnd')]
    public string $periodEnd;

    /**
     * @var string $incomeTaxNumber
     */
    #[JsonProperty('incomeTaxNumber')]
    public string $incomeTaxNumber;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $xml
     */
    #[JsonProperty('xml')]
    public string $xml;

    /**
     * @var array<PostV1DeclarationsMtCompanyTaxGenerateResponseFieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([PostV1DeclarationsMtCompanyTaxGenerateResponseFieldsItem::class])]
    public array $fields;

    /**
     * @var array<PostV1DeclarationsMtCompanyTaxGenerateResponseTaxAccountsItem> $taxAccounts
     */
    #[JsonProperty('taxAccounts'), ArrayType([PostV1DeclarationsMtCompanyTaxGenerateResponseTaxAccountsItem::class])]
    public array $taxAccounts;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @var array<string> $notes
     */
    #[JsonProperty('notes'), ArrayType(['string'])]
    public array $notes;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   year: int,
     *   yearOfAssessment: int,
     *   periodStart: string,
     *   periodEnd: string,
     *   incomeTaxNumber: string,
     *   fileName: string,
     *   xml: string,
     *   fields: array<PostV1DeclarationsMtCompanyTaxGenerateResponseFieldsItem>,
     *   taxAccounts: array<PostV1DeclarationsMtCompanyTaxGenerateResponseTaxAccountsItem>,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   source: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->yearOfAssessment = $values['yearOfAssessment'];
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
        $this->incomeTaxNumber = $values['incomeTaxNumber'];
        $this->fileName = $values['fileName'];
        $this->xml = $values['xml'];
        $this->fields = $values['fields'];
        $this->taxAccounts = $values['taxAccounts'];
        $this->warnings = $values['warnings'];
        $this->notes = $values['notes'];
        $this->source = $values['source'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
