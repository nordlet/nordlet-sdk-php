<?php

namespace Nordlet\Payroll\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PayrollCalcRequest extends JsonSerializableType
{
    /**
     * @var string $taxableBase
     */
    #[JsonProperty('taxableBase')]
    public string $taxableBase;

    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var ?bool $applyNpd
     */
    #[JsonProperty('applyNpd')]
    public ?bool $applyNpd;

    /**
     * @var ?string $npdOverride
     */
    #[JsonProperty('npdOverride')]
    public ?string $npdOverride;

    /**
     * @var ?bool $pensionAccumulation
     */
    #[JsonProperty('pensionAccumulation')]
    public ?bool $pensionAccumulation;

    /**
     * @var ?bool $fixedTerm
     */
    #[JsonProperty('fixedTerm')]
    public ?bool $fixedTerm;

    /**
     * @param array{
     *   taxableBase: string,
     *   date: string,
     *   applyNpd?: ?bool,
     *   npdOverride?: ?string,
     *   pensionAccumulation?: ?bool,
     *   fixedTerm?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->taxableBase = $values['taxableBase'];
        $this->date = $values['date'];
        $this->applyNpd = $values['applyNpd'] ?? null;
        $this->npdOverride = $values['npdOverride'] ?? null;
        $this->pensionAccumulation = $values['pensionAccumulation'] ?? null;
        $this->fixedTerm = $values['fixedTerm'] ?? null;
    }
}
