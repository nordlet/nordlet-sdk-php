<?php

namespace Nordlet\Payroll\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class CalcPayrollRequest extends JsonSerializableType
{
    /**
     * @var string $taxableBase
     */
    #[JsonProperty('taxableBase')]
    public string $taxableBase;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var ?bool $applyAllowance
     */
    #[JsonProperty('applyAllowance')]
    public ?bool $applyAllowance;

    /**
     * @var ?string $allowanceOverride
     */
    #[JsonProperty('allowanceOverride')]
    public ?string $allowanceOverride;

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
     * @var ?string $benefitInKind
     */
    #[JsonProperty('benefitInKind')]
    public ?string $benefitInKind;

    /**
     * @var ?array<string, string> $options
     */
    #[JsonProperty('options'), ArrayType(['string' => 'string'])]
    public ?array $options;

    /**
     * @param array{
     *   taxableBase: string,
     *   date: DateTime,
     *   applyAllowance?: ?bool,
     *   allowanceOverride?: ?string,
     *   pensionAccumulation?: ?bool,
     *   fixedTerm?: ?bool,
     *   benefitInKind?: ?string,
     *   options?: ?array<string, string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->taxableBase = $values['taxableBase'];
        $this->date = $values['date'];
        $this->applyAllowance = $values['applyAllowance'] ?? null;
        $this->allowanceOverride = $values['allowanceOverride'] ?? null;
        $this->pensionAccumulation = $values['pensionAccumulation'] ?? null;
        $this->fixedTerm = $values['fixedTerm'] ?? null;
        $this->benefitInKind = $values['benefitInKind'] ?? null;
        $this->options = $values['options'] ?? null;
    }
}
