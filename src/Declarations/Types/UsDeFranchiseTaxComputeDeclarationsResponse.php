<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsDeFranchiseTaxComputeDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var float $authorizedShares
     */
    #[JsonProperty('authorizedShares')]
    public float $authorizedShares;

    /**
     * @var string $authorizedSharesMethodTax
     */
    #[JsonProperty('authorizedSharesMethodTax')]
    public string $authorizedSharesMethodTax;

    /**
     * @var ?string $assumedPar
     */
    #[JsonProperty('assumedPar')]
    public ?string $assumedPar;

    /**
     * @var ?string $assumedParValueCapital
     */
    #[JsonProperty('assumedParValueCapital')]
    public ?string $assumedParValueCapital;

    /**
     * @var ?string $assumedNoParCapital
     */
    #[JsonProperty('assumedNoParCapital')]
    public ?string $assumedNoParCapital;

    /**
     * @var ?string $assumedParValueCapitalMethodTax
     */
    #[JsonProperty('assumedParValueCapitalMethodTax')]
    public ?string $assumedParValueCapitalMethodTax;

    /**
     * @var value-of<UsDeFranchiseTaxComputeDeclarationsResponseMethod> $method
     */
    #[JsonProperty('method')]
    public string $method;

    /**
     * @var string $tax
     */
    #[JsonProperty('tax')]
    public string $tax;

    /**
     * @var string $annualReportFee
     */
    #[JsonProperty('annualReportFee')]
    public string $annualReportFee;

    /**
     * @param array{
     *   authorizedShares: float,
     *   authorizedSharesMethodTax: string,
     *   method: value-of<UsDeFranchiseTaxComputeDeclarationsResponseMethod>,
     *   tax: string,
     *   annualReportFee: string,
     *   assumedPar?: ?string,
     *   assumedParValueCapital?: ?string,
     *   assumedNoParCapital?: ?string,
     *   assumedParValueCapitalMethodTax?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->authorizedShares = $values['authorizedShares'];
        $this->authorizedSharesMethodTax = $values['authorizedSharesMethodTax'];
        $this->assumedPar = $values['assumedPar'] ?? null;
        $this->assumedParValueCapital = $values['assumedParValueCapital'] ?? null;
        $this->assumedNoParCapital = $values['assumedNoParCapital'] ?? null;
        $this->assumedParValueCapitalMethodTax = $values['assumedParValueCapitalMethodTax'] ?? null;
        $this->method = $values['method'];
        $this->tax = $values['tax'];
        $this->annualReportFee = $values['annualReportFee'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
