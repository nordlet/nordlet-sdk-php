<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class IeCt1GenerateDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

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
     * @var string $taxRegNumber
     */
    #[JsonProperty('taxRegNumber')]
    public string $taxRegNumber;

    /**
     * @var IeCt1GenerateDeclarationsResponseCt1 $ct1
     */
    #[JsonProperty('ct1')]
    public IeCt1GenerateDeclarationsResponseCt1 $ct1;

    /**
     * @var ?IeCt1GenerateDeclarationsResponseAccounts $accounts
     */
    #[JsonProperty('accounts')]
    public ?IeCt1GenerateDeclarationsResponseAccounts $accounts;

    /**
     * @var array<string> $accountsBlocking
     */
    #[JsonProperty('accountsBlocking'), ArrayType(['string'])]
    public array $accountsBlocking;

    /**
     * @var bool $ixbrlMandatory
     */
    #[JsonProperty('ixbrlMandatory')]
    public bool $ixbrlMandatory;

    /**
     * @var IeCt1GenerateDeclarationsResponseCriteria $criteria
     */
    #[JsonProperty('criteria')]
    public IeCt1GenerateDeclarationsResponseCriteria $criteria;

    /**
     * @var array<IeCt1GenerateDeclarationsResponseFieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([IeCt1GenerateDeclarationsResponseFieldsItem::class])]
    public array $fields;

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
     *   periodStart: string,
     *   periodEnd: string,
     *   taxRegNumber: string,
     *   ct1: IeCt1GenerateDeclarationsResponseCt1,
     *   accountsBlocking: array<string>,
     *   ixbrlMandatory: bool,
     *   criteria: IeCt1GenerateDeclarationsResponseCriteria,
     *   fields: array<IeCt1GenerateDeclarationsResponseFieldsItem>,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   source: string,
     *   accounts?: ?IeCt1GenerateDeclarationsResponseAccounts,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
        $this->taxRegNumber = $values['taxRegNumber'];
        $this->ct1 = $values['ct1'];
        $this->accounts = $values['accounts'] ?? null;
        $this->accountsBlocking = $values['accountsBlocking'];
        $this->ixbrlMandatory = $values['ixbrlMandatory'];
        $this->criteria = $values['criteria'];
        $this->fields = $values['fields'];
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
