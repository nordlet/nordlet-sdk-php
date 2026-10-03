<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsIeCt1GenerateResponse extends JsonSerializableType
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
     * @var PostV1DeclarationsIeCt1GenerateResponseCt1 $ct1
     */
    #[JsonProperty('ct1')]
    public PostV1DeclarationsIeCt1GenerateResponseCt1 $ct1;

    /**
     * @var ?PostV1DeclarationsIeCt1GenerateResponseAccounts $accounts
     */
    #[JsonProperty('accounts')]
    public ?PostV1DeclarationsIeCt1GenerateResponseAccounts $accounts;

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
     * @var PostV1DeclarationsIeCt1GenerateResponseCriteria $criteria
     */
    #[JsonProperty('criteria')]
    public PostV1DeclarationsIeCt1GenerateResponseCriteria $criteria;

    /**
     * @var array<PostV1DeclarationsIeCt1GenerateResponseFieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([PostV1DeclarationsIeCt1GenerateResponseFieldsItem::class])]
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
     *   ct1: PostV1DeclarationsIeCt1GenerateResponseCt1,
     *   accountsBlocking: array<string>,
     *   ixbrlMandatory: bool,
     *   criteria: PostV1DeclarationsIeCt1GenerateResponseCriteria,
     *   fields: array<PostV1DeclarationsIeCt1GenerateResponseFieldsItem>,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   source: string,
     *   accounts?: ?PostV1DeclarationsIeCt1GenerateResponseAccounts,
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
