<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class VatProrataAdjustmentGetDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var int $fiscalYear
     */
    #[JsonProperty('fiscalYear')]
    public int $fiscalYear;

    /**
     * @var ?string $provisionalPercent
     */
    #[JsonProperty('provisionalPercent')]
    public ?string $provisionalPercent;

    /**
     * @var ?string $computedPercent
     */
    #[JsonProperty('computedPercent')]
    public ?string $computedPercent;

    /**
     * @var ?string $definitivePercent
     */
    #[JsonProperty('definitivePercent')]
    public ?string $definitivePercent;

    /**
     * @var string $turnoverWithDeduction
     */
    #[JsonProperty('turnoverWithDeduction')]
    public string $turnoverWithDeduction;

    /**
     * @var string $turnoverWithoutDeduction
     */
    #[JsonProperty('turnoverWithoutDeduction')]
    public string $turnoverWithoutDeduction;

    /**
     * @var string $capitalGoodsSales
     */
    #[JsonProperty('capitalGoodsSales')]
    public string $capitalGoodsSales;

    /**
     * @var string $proRataVat
     */
    #[JsonProperty('proRataVat')]
    public string $proRataVat;

    /**
     * @var string $deductedVat
     */
    #[JsonProperty('deductedVat')]
    public string $deductedVat;

    /**
     * @var ?string $definitiveDeductibleVat
     */
    #[JsonProperty('definitiveDeductibleVat')]
    public ?string $definitiveDeductibleVat;

    /**
     * @var ?string $adjustment
     */
    #[JsonProperty('adjustment')]
    public ?string $adjustment;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   fiscalYear: int,
     *   turnoverWithDeduction: string,
     *   turnoverWithoutDeduction: string,
     *   capitalGoodsSales: string,
     *   proRataVat: string,
     *   deductedVat: string,
     *   warnings: array<string>,
     *   source: string,
     *   provisionalPercent?: ?string,
     *   computedPercent?: ?string,
     *   definitivePercent?: ?string,
     *   definitiveDeductibleVat?: ?string,
     *   adjustment?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fiscalYear = $values['fiscalYear'];
        $this->provisionalPercent = $values['provisionalPercent'] ?? null;
        $this->computedPercent = $values['computedPercent'] ?? null;
        $this->definitivePercent = $values['definitivePercent'] ?? null;
        $this->turnoverWithDeduction = $values['turnoverWithDeduction'];
        $this->turnoverWithoutDeduction = $values['turnoverWithoutDeduction'];
        $this->capitalGoodsSales = $values['capitalGoodsSales'];
        $this->proRataVat = $values['proRataVat'];
        $this->deductedVat = $values['deductedVat'];
        $this->definitiveDeductibleVat = $values['definitiveDeductibleVat'] ?? null;
        $this->adjustment = $values['adjustment'] ?? null;
        $this->warnings = $values['warnings'];
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
