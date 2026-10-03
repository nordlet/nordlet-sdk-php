<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsIeB1GenerateResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var string $croNumber
     */
    #[JsonProperty('croNumber')]
    public string $croNumber;

    /**
     * @var string $companyName
     */
    #[JsonProperty('companyName')]
    public string $companyName;

    /**
     * @var ?string $annualReturnDate
     */
    #[JsonProperty('annualReturnDate')]
    public ?string $annualReturnDate;

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
     * @var array<PostV1DeclarationsIeB1GenerateResponseFieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([PostV1DeclarationsIeB1GenerateResponseFieldsItem::class])]
    public array $fields;

    /**
     * @var array<PostV1DeclarationsIeB1GenerateResponseDirectorsItem> $directors
     */
    #[JsonProperty('directors'), ArrayType([PostV1DeclarationsIeB1GenerateResponseDirectorsItem::class])]
    public array $directors;

    /**
     * @var ?PostV1DeclarationsIeB1GenerateResponseSecretary $secretary
     */
    #[JsonProperty('secretary')]
    public ?PostV1DeclarationsIeB1GenerateResponseSecretary $secretary;

    /**
     * @var array<PostV1DeclarationsIeB1GenerateResponseMembersItem> $members
     */
    #[JsonProperty('members'), ArrayType([PostV1DeclarationsIeB1GenerateResponseMembersItem::class])]
    public array $members;

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
     *   croNumber: string,
     *   companyName: string,
     *   fileName: string,
     *   xml: string,
     *   fields: array<PostV1DeclarationsIeB1GenerateResponseFieldsItem>,
     *   directors: array<PostV1DeclarationsIeB1GenerateResponseDirectorsItem>,
     *   members: array<PostV1DeclarationsIeB1GenerateResponseMembersItem>,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   source: string,
     *   annualReturnDate?: ?string,
     *   secretary?: ?PostV1DeclarationsIeB1GenerateResponseSecretary,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->croNumber = $values['croNumber'];
        $this->companyName = $values['companyName'];
        $this->annualReturnDate = $values['annualReturnDate'] ?? null;
        $this->fileName = $values['fileName'];
        $this->xml = $values['xml'];
        $this->fields = $values['fields'];
        $this->directors = $values['directors'];
        $this->secretary = $values['secretary'] ?? null;
        $this->members = $values['members'];
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
