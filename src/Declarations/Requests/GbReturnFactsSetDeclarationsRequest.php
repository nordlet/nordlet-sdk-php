<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\GbReturnFactsSetDeclarationsRequestFacts;

class GbReturnFactsSetDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var GbReturnFactsSetDeclarationsRequestFacts $facts
     */
    #[JsonProperty('facts')]
    public GbReturnFactsSetDeclarationsRequestFacts $facts;

    /**
     * @param array{
     *   year: int,
     *   facts: GbReturnFactsSetDeclarationsRequestFacts,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->facts = $values['facts'];
    }
}
