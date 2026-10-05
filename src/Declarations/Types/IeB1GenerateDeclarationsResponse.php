<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class IeB1GenerateDeclarationsResponse extends JsonSerializableType
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
     * @var ?DateTime $annualReturnDate
     */
    #[JsonProperty('annualReturnDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $annualReturnDate;

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
     * @var array<IeB1GenerateDeclarationsResponseFieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([IeB1GenerateDeclarationsResponseFieldsItem::class])]
    public array $fields;

    /**
     * @var array<IeB1GenerateDeclarationsResponseDirectorsItem> $directors
     */
    #[JsonProperty('directors'), ArrayType([IeB1GenerateDeclarationsResponseDirectorsItem::class])]
    public array $directors;

    /**
     * @var ?IeB1GenerateDeclarationsResponseSecretary $secretary
     */
    #[JsonProperty('secretary')]
    public ?IeB1GenerateDeclarationsResponseSecretary $secretary;

    /**
     * @var array<IeB1GenerateDeclarationsResponseMembersItem> $members
     */
    #[JsonProperty('members'), ArrayType([IeB1GenerateDeclarationsResponseMembersItem::class])]
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
     *   fields: array<IeB1GenerateDeclarationsResponseFieldsItem>,
     *   directors: array<IeB1GenerateDeclarationsResponseDirectorsItem>,
     *   members: array<IeB1GenerateDeclarationsResponseMembersItem>,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   source: string,
     *   annualReturnDate?: ?DateTime,
     *   secretary?: ?IeB1GenerateDeclarationsResponseSecretary,
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
