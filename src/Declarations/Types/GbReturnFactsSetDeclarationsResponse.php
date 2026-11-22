<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbReturnFactsSetDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var GbReturnFactsSetDeclarationsResponseFacts $facts
     */
    #[JsonProperty('facts')]
    public GbReturnFactsSetDeclarationsResponseFacts $facts;

    /**
     * @param array{
     *   year: int,
     *   facts: GbReturnFactsSetDeclarationsResponseFacts,
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
