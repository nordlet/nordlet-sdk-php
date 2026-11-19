<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class Us941GetDeclarationsResponseLine5A extends JsonSerializableType
{
    /**
     * @var string $wages
     */
    #[JsonProperty('wages')]
    public string $wages;

    /**
     * @var string $tax
     */
    #[JsonProperty('tax')]
    public string $tax;

    /**
     * @param array{
     *   wages: string,
     *   tax: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->wages = $values['wages'];
        $this->tax = $values['tax'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
