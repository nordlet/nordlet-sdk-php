<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class EuOssComputeDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var int $periodYear
     */
    #[JsonProperty('periodYear')]
    public int $periodYear;

    /**
     * @var DateTime $fromDate
     */
    #[JsonProperty('fromDate'), Date(Date::TYPE_DATE)]
    public DateTime $fromDate;

    /**
     * @var DateTime $toDate
     */
    #[JsonProperty('toDate'), Date(Date::TYPE_DATE)]
    public DateTime $toDate;

    /**
     * @var string $memberStateOfIdentification
     */
    #[JsonProperty('memberStateOfIdentification')]
    public string $memberStateOfIdentification;

    /**
     * @var array<EuOssComputeDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([EuOssComputeDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var EuOssComputeDeclarationsResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public EuOssComputeDeclarationsResponseTotals $totals;

    /**
     * @var array<EuOssComputeDeclarationsResponseCorrectionsItem> $corrections
     */
    #[JsonProperty('corrections'), ArrayType([EuOssComputeDeclarationsResponseCorrectionsItem::class])]
    public array $corrections;

    /**
     * @var EuOssComputeDeclarationsResponseCorrectionsTotal $correctionsTotal
     */
    #[JsonProperty('correctionsTotal')]
    public EuOssComputeDeclarationsResponseCorrectionsTotal $correctionsTotal;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @var int $periodQuarter
     */
    #[JsonProperty('periodQuarter')]
    public int $periodQuarter;

    /**
     * @param array{
     *   periodYear: int,
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   memberStateOfIdentification: string,
     *   rows: array<EuOssComputeDeclarationsResponseRowsItem>,
     *   totals: EuOssComputeDeclarationsResponseTotals,
     *   corrections: array<EuOssComputeDeclarationsResponseCorrectionsItem>,
     *   correctionsTotal: EuOssComputeDeclarationsResponseCorrectionsTotal,
     *   warnings: array<string>,
     *   periodQuarter: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->periodYear = $values['periodYear'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->memberStateOfIdentification = $values['memberStateOfIdentification'];
        $this->rows = $values['rows'];
        $this->totals = $values['totals'];
        $this->corrections = $values['corrections'];
        $this->correctionsTotal = $values['correctionsTotal'];
        $this->warnings = $values['warnings'];
        $this->periodQuarter = $values['periodQuarter'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
