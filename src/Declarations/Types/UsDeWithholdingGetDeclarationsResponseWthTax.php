<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsDeWithholdingGetDeclarationsResponseWthTax extends JsonSerializableType
{
    /**
     * @var ?string $taxpayerId
     */
    #[JsonProperty('taxpayerId')]
    public ?string $taxpayerId;

    /**
     * @var string $taxPeriodBeginning
     */
    #[JsonProperty('taxPeriodBeginning')]
    public string $taxPeriodBeginning;

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
     * @var string $line2
     */
    #[JsonProperty('line2')]
    public string $line2;

    /**
     * @param array{
     *   taxPeriodBeginning: string,
     *   taxPeriodEnding: string,
     *   line1: string,
     *   line2: string,
     *   taxpayerId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->taxpayerId = $values['taxpayerId'] ?? null;
        $this->taxPeriodBeginning = $values['taxPeriodBeginning'];
        $this->taxPeriodEnding = $values['taxPeriodEnding'];
        $this->line1 = $values['line1'];
        $this->line2 = $values['line2'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
