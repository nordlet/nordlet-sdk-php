<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UsSalesTaxGetDeclarationsResponse extends JsonSerializableType
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
     * @var array<UsSalesTaxGetDeclarationsResponseJurisdictionsItem> $jurisdictions
     */
    #[JsonProperty('jurisdictions'), ArrayType([UsSalesTaxGetDeclarationsResponseJurisdictionsItem::class])]
    public array $jurisdictions;

    /**
     * @var string $salesTax
     */
    #[JsonProperty('salesTax')]
    public string $salesTax;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   from: string,
     *   to: string,
     *   jurisdictions: array<UsSalesTaxGetDeclarationsResponseJurisdictionsItem>,
     *   salesTax: string,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->from = $values['from'];
        $this->to = $values['to'];
        $this->jurisdictions = $values['jurisdictions'];
        $this->salesTax = $values['salesTax'];
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
