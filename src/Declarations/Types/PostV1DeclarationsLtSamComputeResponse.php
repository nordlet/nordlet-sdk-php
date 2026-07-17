<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsLtSamComputeResponse extends JsonSerializableType
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
     * @var int $insuredCount
     */
    #[JsonProperty('insuredCount')]
    public int $insuredCount;

    /**
     * @var string $insuredIncomeTotal
     */
    #[JsonProperty('insuredIncomeTotal')]
    public string $insuredIncomeTotal;

    /**
     * @var string $contributionsTotal
     */
    #[JsonProperty('contributionsTotal')]
    public string $contributionsTotal;

    /**
     * @var array<PostV1DeclarationsLtSamComputeResponsePersonsItem> $persons
     */
    #[JsonProperty('persons'), ArrayType([PostV1DeclarationsLtSamComputeResponsePersonsItem::class])]
    public array $persons;

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
     *   insuredCount: int,
     *   insuredIncomeTotal: string,
     *   contributionsTotal: string,
     *   persons: array<PostV1DeclarationsLtSamComputeResponsePersonsItem>,
     *   warnings: array<string>,
     *   notes: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->insuredCount = $values['insuredCount'];
        $this->insuredIncomeTotal = $values['insuredIncomeTotal'];
        $this->contributionsTotal = $values['contributionsTotal'];
        $this->persons = $values['persons'];
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
