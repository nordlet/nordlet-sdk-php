<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class CyHe32GenerateDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var string $madeUpTo
     */
    #[JsonProperty('madeUpTo')]
    public string $madeUpTo;

    /**
     * @var string $registrarNumber
     */
    #[JsonProperty('registrarNumber')]
    public string $registrarNumber;

    /**
     * @var string $companyName
     */
    #[JsonProperty('companyName')]
    public string $companyName;

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
     * @var string $pdfFileName
     */
    #[JsonProperty('pdfFileName')]
    public string $pdfFileName;

    /**
     * @var string $pdf
     */
    #[JsonProperty('pdf')]
    public string $pdf;

    /**
     * @var string $formSource
     */
    #[JsonProperty('formSource')]
    public string $formSource;

    /**
     * @var array<CyHe32GenerateDeclarationsResponseFieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([CyHe32GenerateDeclarationsResponseFieldsItem::class])]
    public array $fields;

    /**
     * @var array<CyHe32GenerateDeclarationsResponseMembersItem> $members
     */
    #[JsonProperty('members'), ArrayType([CyHe32GenerateDeclarationsResponseMembersItem::class])]
    public array $members;

    /**
     * @var array<CyHe32GenerateDeclarationsResponseOfficersItem> $officers
     */
    #[JsonProperty('officers'), ArrayType([CyHe32GenerateDeclarationsResponseOfficersItem::class])]
    public array $officers;

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
     *   madeUpTo: string,
     *   registrarNumber: string,
     *   companyName: string,
     *   fileName: string,
     *   xml: string,
     *   pdfFileName: string,
     *   pdf: string,
     *   formSource: string,
     *   fields: array<CyHe32GenerateDeclarationsResponseFieldsItem>,
     *   members: array<CyHe32GenerateDeclarationsResponseMembersItem>,
     *   officers: array<CyHe32GenerateDeclarationsResponseOfficersItem>,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   source: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->madeUpTo = $values['madeUpTo'];
        $this->registrarNumber = $values['registrarNumber'];
        $this->companyName = $values['companyName'];
        $this->fileName = $values['fileName'];
        $this->xml = $values['xml'];
        $this->pdfFileName = $values['pdfFileName'];
        $this->pdf = $values['pdf'];
        $this->formSource = $values['formSource'];
        $this->fields = $values['fields'];
        $this->members = $values['members'];
        $this->officers = $values['officers'];
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
