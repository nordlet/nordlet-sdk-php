<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class EuIossComputeDeclarationsResponse extends JsonSerializableType
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
     * @var array<EuIossComputeDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([EuIossComputeDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var EuIossComputeDeclarationsResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public EuIossComputeDeclarationsResponseTotals $totals;

    /**
     * @var array<EuIossComputeDeclarationsResponseCorrectionsItem> $corrections
     */
    #[JsonProperty('corrections'), ArrayType([EuIossComputeDeclarationsResponseCorrectionsItem::class])]
    public array $corrections;

    /**
     * @var EuIossComputeDeclarationsResponseCorrectionsTotal $correctionsTotal
     */
    #[JsonProperty('correctionsTotal')]
    public EuIossComputeDeclarationsResponseCorrectionsTotal $correctionsTotal;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @var int $periodMonth
     */
    #[JsonProperty('periodMonth')]
    public int $periodMonth;

    /**
     * @param array{
     *   periodYear: int,
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   memberStateOfIdentification: string,
     *   rows: array<EuIossComputeDeclarationsResponseRowsItem>,
     *   totals: EuIossComputeDeclarationsResponseTotals,
     *   corrections: array<EuIossComputeDeclarationsResponseCorrectionsItem>,
     *   correctionsTotal: EuIossComputeDeclarationsResponseCorrectionsTotal,
     *   warnings: array<string>,
     *   periodMonth: int,
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
        $this->periodMonth = $values['periodMonth'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
