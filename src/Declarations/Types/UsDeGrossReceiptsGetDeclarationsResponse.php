<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UsDeGrossReceiptsGetDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $from
     */
    #[JsonProperty('from')]
    public string $from;

    /**
     * @var string $to
     */
    #[JsonProperty('to')]
    public string $to;

    /**
     * @var string $activity
     */
    #[JsonProperty('activity')]
    public string $activity;

    /**
     * @var string $grossReceipts
     */
    #[JsonProperty('grossReceipts')]
    public string $grossReceipts;

    /**
     * @var string $excludedReceipts
     */
    #[JsonProperty('excludedReceipts')]
    public string $excludedReceipts;

    /**
     * @var string $deduction
     */
    #[JsonProperty('deduction')]
    public string $deduction;

    /**
     * @var string $taxableReceipts
     */
    #[JsonProperty('taxableReceipts')]
    public string $taxableReceipts;

    /**
     * @var string $rate
     */
    #[JsonProperty('rate')]
    public string $rate;

    /**
     * @var string $tax
     */
    #[JsonProperty('tax')]
    public string $tax;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   from: string,
     *   to: string,
     *   activity: string,
     *   grossReceipts: string,
     *   excludedReceipts: string,
     *   deduction: string,
     *   taxableReceipts: string,
     *   rate: string,
     *   tax: string,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->from = $values['from'];
        $this->to = $values['to'];
        $this->activity = $values['activity'];
        $this->grossReceipts = $values['grossReceipts'];
        $this->excludedReceipts = $values['excludedReceipts'];
        $this->deduction = $values['deduction'];
        $this->taxableReceipts = $values['taxableReceipts'];
        $this->rate = $values['rate'];
        $this->tax = $values['tax'];
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
