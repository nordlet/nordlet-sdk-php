<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsLtPln204ComputeResponse extends JsonSerializableType
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
     * @var value-of<PostV1DeclarationsLtPln204ComputeResponseVariant> $variant
     */
    #[JsonProperty('variant')]
    public string $variant;

    /**
     * @var string $registrationNumber
     */
    #[JsonProperty('registrationNumber')]
    public string $registrationNumber;

    /**
     * @var string $companyName
     */
    #[JsonProperty('companyName')]
    public string $companyName;

    /**
     * @var string $ratePercent
     */
    #[JsonProperty('ratePercent')]
    public string $ratePercent;

    /**
     * @var string $rateCode
     */
    #[JsonProperty('rateCode')]
    public string $rateCode;

    /**
     * @var bool $smallEntity
     */
    #[JsonProperty('smallEntity')]
    public bool $smallEntity;

    /**
     * @var PostV1DeclarationsLtPln204ComputeResponseCriteria $criteria
     */
    #[JsonProperty('criteria')]
    public PostV1DeclarationsLtPln204ComputeResponseCriteria $criteria;

    /**
     * @var string $totalIncome
     */
    #[JsonProperty('totalIncome')]
    public string $totalIncome;

    /**
     * @var array<string, string> $boxes
     */
    #[JsonProperty('boxes'), ArrayType(['string' => 'string'])]
    public array $boxes;

    /**
     * @var array<PostV1DeclarationsLtPln204ComputeResponseAnnexSItem> $annexS
     */
    #[JsonProperty('annexS'), ArrayType([PostV1DeclarationsLtPln204ComputeResponseAnnexSItem::class])]
    public array $annexS;

    /**
     * @var array<PostV1DeclarationsLtPln204ComputeResponseAnnexZItem> $annexZ
     */
    #[JsonProperty('annexZ'), ArrayType([PostV1DeclarationsLtPln204ComputeResponseAnnexZItem::class])]
    public array $annexZ;

    /**
     * @var array<PostV1DeclarationsLtPln204ComputeResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1DeclarationsLtPln204ComputeResponseLinesItem::class])]
    public array $lines;

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
     *   variant: value-of<PostV1DeclarationsLtPln204ComputeResponseVariant>,
     *   registrationNumber: string,
     *   companyName: string,
     *   ratePercent: string,
     *   rateCode: string,
     *   smallEntity: bool,
     *   criteria: PostV1DeclarationsLtPln204ComputeResponseCriteria,
     *   totalIncome: string,
     *   boxes: array<string, string>,
     *   annexS: array<PostV1DeclarationsLtPln204ComputeResponseAnnexSItem>,
     *   annexZ: array<PostV1DeclarationsLtPln204ComputeResponseAnnexZItem>,
     *   lines: array<PostV1DeclarationsLtPln204ComputeResponseLinesItem>,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   source: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
        $this->variant = $values['variant'];
        $this->registrationNumber = $values['registrationNumber'];
        $this->companyName = $values['companyName'];
        $this->ratePercent = $values['ratePercent'];
        $this->rateCode = $values['rateCode'];
        $this->smallEntity = $values['smallEntity'];
        $this->criteria = $values['criteria'];
        $this->totalIncome = $values['totalIncome'];
        $this->boxes = $values['boxes'];
        $this->annexS = $values['annexS'];
        $this->annexZ = $values['annexZ'];
        $this->lines = $values['lines'];
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
