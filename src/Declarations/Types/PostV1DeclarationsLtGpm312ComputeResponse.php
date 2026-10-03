<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsLtGpm312ComputeResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var value-of<PostV1DeclarationsLtGpm312ComputeResponsePayoutTiming> $payoutTiming
     */
    #[JsonProperty('payoutTiming')]
    public string $payoutTiming;

    /**
     * @var PostV1DeclarationsLtGpm312ComputeResponsePayoutFrom $payoutFrom
     */
    #[JsonProperty('payoutFrom')]
    public PostV1DeclarationsLtGpm312ComputeResponsePayoutFrom $payoutFrom;

    /**
     * @var PostV1DeclarationsLtGpm312ComputeResponsePayoutTo $payoutTo
     */
    #[JsonProperty('payoutTo')]
    public PostV1DeclarationsLtGpm312ComputeResponsePayoutTo $payoutTo;

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
     * @var array<PostV1DeclarationsLtGpm312ComputeResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1DeclarationsLtGpm312ComputeResponseRowsItem::class])]
    public array $rows;

    /**
     * @var PostV1DeclarationsLtGpm312ComputeResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public PostV1DeclarationsLtGpm312ComputeResponseTotals $totals;

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
     *   payoutTiming: value-of<PostV1DeclarationsLtGpm312ComputeResponsePayoutTiming>,
     *   payoutFrom: PostV1DeclarationsLtGpm312ComputeResponsePayoutFrom,
     *   payoutTo: PostV1DeclarationsLtGpm312ComputeResponsePayoutTo,
     *   registrationNumber: string,
     *   companyName: string,
     *   rows: array<PostV1DeclarationsLtGpm312ComputeResponseRowsItem>,
     *   totals: PostV1DeclarationsLtGpm312ComputeResponseTotals,
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
