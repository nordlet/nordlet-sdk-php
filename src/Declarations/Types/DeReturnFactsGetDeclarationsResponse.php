<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class DeReturnFactsGetDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var DeReturnFactsGetDeclarationsResponseFacts $facts
     */
    #[JsonProperty('facts')]
    public DeReturnFactsGetDeclarationsResponseFacts $facts;

    /**
     * @param array{
     *   year: int,
     *   facts: DeReturnFactsGetDeclarationsResponseFacts,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->facts = $values['facts'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
