<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsEuIossComputeResponse extends JsonSerializableType
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
     * @var array<PostV1DeclarationsEuIossComputeResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1DeclarationsEuIossComputeResponseRowsItem::class])]
    public array $rows;

    /**
     * @var PostV1DeclarationsEuIossComputeResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public PostV1DeclarationsEuIossComputeResponseTotals $totals;

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
     *   fromDate: string,
     *   toDate: string,
     *   memberStateOfIdentification: string,
     *   rows: array<PostV1DeclarationsEuIossComputeResponseRowsItem>,
     *   totals: PostV1DeclarationsEuIossComputeResponseTotals,
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
