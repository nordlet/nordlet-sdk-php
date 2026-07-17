<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsEuOssComputeResponse extends JsonSerializableType
{
    /**
     * @var int $periodYear
     */
    #[JsonProperty('periodYear')]
    public int $periodYear;

    /**
     * @var string $fromDate
     */
    #[JsonProperty('fromDate')]
    public string $fromDate;

    /**
     * @var string $toDate
     */
    #[JsonProperty('toDate')]
    public string $toDate;

    /**
     * @var string $memberStateOfIdentification
     */
    #[JsonProperty('memberStateOfIdentification')]
    public string $memberStateOfIdentification;

    /**
     * @var array<PostV1DeclarationsEuOssComputeResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1DeclarationsEuOssComputeResponseRowsItem::class])]
    public array $rows;

    /**
     * @var PostV1DeclarationsEuOssComputeResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public PostV1DeclarationsEuOssComputeResponseTotals $totals;

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
     *   fromDate: string,
     *   toDate: string,
     *   memberStateOfIdentification: string,
     *   rows: array<PostV1DeclarationsEuOssComputeResponseRowsItem>,
     *   totals: PostV1DeclarationsEuOssComputeResponseTotals,
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
