<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class EuOssComputeDeclarationsResponseCorrectionsTotal extends JsonSerializableType
{
    /**
     * @var string $taxableAmount
     */
    #[JsonProperty('taxableAmount')]
    public string $taxableAmount;

    /**
     * @var string $vatAmount
     */
    #[JsonProperty('vatAmount')]
    public string $vatAmount;

    /**
     * @param array{
     *   taxableAmount: string,
     *   vatAmount: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->taxableAmount = $values['taxableAmount'];
        $this->vatAmount = $values['vatAmount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
