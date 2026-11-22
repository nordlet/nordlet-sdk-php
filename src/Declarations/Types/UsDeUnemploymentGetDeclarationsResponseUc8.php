<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UsDeUnemploymentGetDeclarationsResponseUc8 extends JsonSerializableType
{
    /**
     * @var string $reportingPeriod
     */
    #[JsonProperty('reportingPeriod')]
    public string $reportingPeriod;

    /**
     * @var ?string $accountNo
     */
    #[JsonProperty('accountNo')]
    public ?string $accountNo;

    /**
     * @var ?string $federalIdNumber
     */
    #[JsonProperty('federalIdNumber')]
    public ?string $federalIdNumber;

    /**
     * @var ?string $taxRate
     */
    #[JsonProperty('taxRate')]
    public ?string $taxRate;

    /**
     * @var array<float> $line1
     */
    #[JsonProperty('line1'), ArrayType(['float'])]
    public array $line1;

    /**
     * @var string $line2
     */
    #[JsonProperty('line2')]
    public string $line2;

    /**
     * @var string $line3
     */
    #[JsonProperty('line3')]
    public string $line3;

    /**
     * @var string $line4
     */
    #[JsonProperty('line4')]
    public string $line4;

    /**
     * @var string $line5
     */
    #[JsonProperty('line5')]
    public string $line5;

    /**
     * @var ?string $line6
     */
    #[JsonProperty('line6')]
    public ?string $line6;

    /**
     * @var string $line7
     */
    #[JsonProperty('line7')]
    public string $line7;

    /**
     * @var ?string $line8
     */
    #[JsonProperty('line8')]
    public ?string $line8;

    /**
     * @var ?string $line9
     */
    #[JsonProperty('line9')]
    public ?string $line9;

    /**
     * @var string $line10
     */
    #[JsonProperty('line10')]
    public string $line10;

    /**
     * @param array{
     *   reportingPeriod: string,
     *   line1: array<float>,
     *   line2: string,
     *   line3: string,
     *   line4: string,
     *   line5: string,
     *   line7: string,
     *   line10: string,
     *   accountNo?: ?string,
     *   federalIdNumber?: ?string,
     *   taxRate?: ?string,
     *   line6?: ?string,
     *   line8?: ?string,
     *   line9?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->reportingPeriod = $values['reportingPeriod'];
        $this->accountNo = $values['accountNo'] ?? null;
        $this->federalIdNumber = $values['federalIdNumber'] ?? null;
        $this->taxRate = $values['taxRate'] ?? null;
        $this->line1 = $values['line1'];
        $this->line2 = $values['line2'];
        $this->line3 = $values['line3'];
        $this->line4 = $values['line4'];
        $this->line5 = $values['line5'];
        $this->line6 = $values['line6'] ?? null;
        $this->line7 = $values['line7'];
        $this->line8 = $values['line8'] ?? null;
        $this->line9 = $values['line9'] ?? null;
        $this->line10 = $values['line10'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
