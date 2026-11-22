<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UsDeWithholdingReconciliationGetDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var float $year
     */
    #[JsonProperty('year')]
    public float $year;

    /**
     * @var ?string $taxpayerId
     */
    #[JsonProperty('taxpayerId')]
    public ?string $taxpayerId;

    /**
     * @var string $taxPeriodStarting
     */
    #[JsonProperty('taxPeriodStarting')]
    public string $taxPeriodStarting;

    /**
     * @var string $taxPeriodEnding
     */
    #[JsonProperty('taxPeriodEnding')]
    public string $taxPeriodEnding;

    /**
     * @var string $line1
     */
    #[JsonProperty('line1')]
    public string $line1;

    /**
     * @var float $line2
     */
    #[JsonProperty('line2')]
    public float $line2;

    /**
     * @var string $line3
     */
    #[JsonProperty('line3')]
    public string $line3;

    /**
     * @var ?string $line4
     */
    #[JsonProperty('line4')]
    public ?string $line4;

    /**
     * @var ?string $line5A
     */
    #[JsonProperty('line5a')]
    public ?string $line5A;

    /**
     * @var ?string $line5B
     */
    #[JsonProperty('line5b')]
    public ?string $line5B;

    /**
     * @var ?string $line6
     */
    #[JsonProperty('line6')]
    public ?string $line6;

    /**
     * @var array<UsDeWithholdingReconciliationGetDeclarationsResponseWorksheetItem> $worksheet
     */
    #[JsonProperty('worksheet'), ArrayType([UsDeWithholdingReconciliationGetDeclarationsResponseWorksheetItem::class])]
    public array $worksheet;

    /**
     * @var ?string $totalTaxPaid
     */
    #[JsonProperty('totalTaxPaid')]
    public ?string $totalTaxPaid;

    /**
     * @var string $totalTaxWithheld
     */
    #[JsonProperty('totalTaxWithheld')]
    public string $totalTaxWithheld;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   year: float,
     *   taxPeriodStarting: string,
     *   taxPeriodEnding: string,
     *   line1: string,
     *   line2: float,
     *   line3: string,
     *   worksheet: array<UsDeWithholdingReconciliationGetDeclarationsResponseWorksheetItem>,
     *   totalTaxWithheld: string,
     *   source: string,
     *   taxpayerId?: ?string,
     *   line4?: ?string,
     *   line5A?: ?string,
     *   line5B?: ?string,
     *   line6?: ?string,
     *   totalTaxPaid?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->taxpayerId = $values['taxpayerId'] ?? null;
        $this->taxPeriodStarting = $values['taxPeriodStarting'];
        $this->taxPeriodEnding = $values['taxPeriodEnding'];
        $this->line1 = $values['line1'];
        $this->line2 = $values['line2'];
        $this->line3 = $values['line3'];
        $this->line4 = $values['line4'] ?? null;
        $this->line5A = $values['line5A'] ?? null;
        $this->line5B = $values['line5B'] ?? null;
        $this->line6 = $values['line6'] ?? null;
        $this->worksheet = $values['worksheet'];
        $this->totalTaxPaid = $values['totalTaxPaid'] ?? null;
        $this->totalTaxWithheld = $values['totalTaxWithheld'];
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
