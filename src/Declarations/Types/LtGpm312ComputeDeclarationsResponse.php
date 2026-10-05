<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class LtGpm312ComputeDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var value-of<LtGpm312ComputeDeclarationsResponsePayoutTiming> $payoutTiming
     */
    #[JsonProperty('payoutTiming')]
    public string $payoutTiming;

    /**
     * @var LtGpm312ComputeDeclarationsResponsePayoutFrom $payoutFrom
     */
    #[JsonProperty('payoutFrom')]
    public LtGpm312ComputeDeclarationsResponsePayoutFrom $payoutFrom;

    /**
     * @var LtGpm312ComputeDeclarationsResponsePayoutTo $payoutTo
     */
    #[JsonProperty('payoutTo')]
    public LtGpm312ComputeDeclarationsResponsePayoutTo $payoutTo;

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
     * @var array<LtGpm312ComputeDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([LtGpm312ComputeDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var LtGpm312ComputeDeclarationsResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public LtGpm312ComputeDeclarationsResponseTotals $totals;

    /**
     * @var int $runsFound
     */
    #[JsonProperty('runsFound')]
    public int $runsFound;

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
     *   payoutTiming: value-of<LtGpm312ComputeDeclarationsResponsePayoutTiming>,
     *   payoutFrom: LtGpm312ComputeDeclarationsResponsePayoutFrom,
     *   payoutTo: LtGpm312ComputeDeclarationsResponsePayoutTo,
     *   registrationNumber: string,
     *   companyName: string,
     *   rows: array<LtGpm312ComputeDeclarationsResponseRowsItem>,
     *   totals: LtGpm312ComputeDeclarationsResponseTotals,
     *   runsFound: int,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   source: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->payoutTiming = $values['payoutTiming'];
        $this->payoutFrom = $values['payoutFrom'];
        $this->payoutTo = $values['payoutTo'];
        $this->registrationNumber = $values['registrationNumber'];
        $this->companyName = $values['companyName'];
        $this->rows = $values['rows'];
        $this->totals = $values['totals'];
        $this->runsFound = $values['runsFound'];
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
