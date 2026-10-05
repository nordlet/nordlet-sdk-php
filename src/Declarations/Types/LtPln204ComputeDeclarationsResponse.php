<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class LtPln204ComputeDeclarationsResponse extends JsonSerializableType
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
     * @var value-of<LtPln204ComputeDeclarationsResponseVariant> $variant
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
     * @var LtPln204ComputeDeclarationsResponseCriteria $criteria
     */
    #[JsonProperty('criteria')]
    public LtPln204ComputeDeclarationsResponseCriteria $criteria;

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
     * @var array<LtPln204ComputeDeclarationsResponseAnnexSItem> $annexS
     */
    #[JsonProperty('annexS'), ArrayType([LtPln204ComputeDeclarationsResponseAnnexSItem::class])]
    public array $annexS;

    /**
     * @var array<LtPln204ComputeDeclarationsResponseAnnexZItem> $annexZ
     */
    #[JsonProperty('annexZ'), ArrayType([LtPln204ComputeDeclarationsResponseAnnexZItem::class])]
    public array $annexZ;

    /**
     * @var array<LtPln204ComputeDeclarationsResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([LtPln204ComputeDeclarationsResponseLinesItem::class])]
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
     *   variant: value-of<LtPln204ComputeDeclarationsResponseVariant>,
     *   registrationNumber: string,
     *   companyName: string,
     *   ratePercent: string,
     *   rateCode: string,
     *   smallEntity: bool,
     *   criteria: LtPln204ComputeDeclarationsResponseCriteria,
     *   totalIncome: string,
     *   boxes: array<string, string>,
     *   annexS: array<LtPln204ComputeDeclarationsResponseAnnexSItem>,
     *   annexZ: array<LtPln204ComputeDeclarationsResponseAnnexZItem>,
     *   lines: array<LtPln204ComputeDeclarationsResponseLinesItem>,
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
