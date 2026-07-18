<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsEuSmeCrossBorderReportComputeResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $quarter
     */
    #[JsonProperty('quarter')]
    public int $quarter;

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
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var array<PostV1DeclarationsEuSmeCrossBorderReportComputeResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1DeclarationsEuSmeCrossBorderReportComputeResponseRowsItem::class])]
    public array $rows;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   year: int,
     *   quarter: int,
     *   fromDate: string,
     *   toDate: string,
     *   currency: string,
     *   rows: array<PostV1DeclarationsEuSmeCrossBorderReportComputeResponseRowsItem>,
     *   total: string,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->quarter = $values['quarter'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->currency = $values['currency'];
        $this->rows = $values['rows'];
        $this->total = $values['total'];
        $this->warnings = $values['warnings'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
