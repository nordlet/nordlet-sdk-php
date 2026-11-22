<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbReturnFactsGetDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var GbReturnFactsGetDeclarationsResponseFacts $facts
     */
    #[JsonProperty('facts')]
    public GbReturnFactsGetDeclarationsResponseFacts $facts;

    /**
     * @param array{
     *   year: int,
     *   facts: GbReturnFactsGetDeclarationsResponseFacts,
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
