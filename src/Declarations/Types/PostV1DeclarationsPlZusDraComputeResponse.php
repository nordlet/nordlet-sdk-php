<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsPlZusDraComputeResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var ?string $runStatus
     */
    #[JsonProperty('runStatus')]
    public ?string $runStatus;

    /**
     * @var int $insuredCount
     */
    #[JsonProperty('insuredCount')]
    public int $insuredCount;

    /**
     * @var array<PostV1DeclarationsPlZusDraComputeResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1DeclarationsPlZusDraComputeResponseRowsItem::class])]
    public array $rows;

    /**
     * @var string $socialTotal
     */
    #[JsonProperty('socialTotal')]
    public string $socialTotal;

    /**
     * @var string $healthTotal
     */
    #[JsonProperty('healthTotal')]
    public string $healthTotal;

    /**
     * @var string $fundsTotal
     */
    #[JsonProperty('fundsTotal')]
    public string $fundsTotal;

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
     * @var array<string> $notes
     */
    #[JsonProperty('notes'), ArrayType(['string'])]
    public array $notes;

    /**
     * @param array{
     *   year: int,
     *   month: int,
     *   source: string,
     *   insuredCount: int,
     *   rows: array<PostV1DeclarationsPlZusDraComputeResponseRowsItem>,
     *   socialTotal: string,
     *   healthTotal: string,
     *   fundsTotal: string,
     *   total: string,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   runStatus?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->source = $values['source'];
        $this->runStatus = $values['runStatus'] ?? null;
        $this->insuredCount = $values['insuredCount'];
        $this->rows = $values['rows'];
        $this->socialTotal = $values['socialTotal'];
        $this->healthTotal = $values['healthTotal'];
        $this->fundsTotal = $values['fundsTotal'];
        $this->total = $values['total'];
        $this->warnings = $values['warnings'];
        $this->notes = $values['notes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
