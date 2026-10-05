<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\DeReturnFactsSetDeclarationsRequestFacts;

class DeReturnFactsSetDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var DeReturnFactsSetDeclarationsRequestFacts $facts
     */
    #[JsonProperty('facts')]
    public DeReturnFactsSetDeclarationsRequestFacts $facts;

    /**
     * @param array{
     *   year: int,
     *   facts: DeReturnFactsSetDeclarationsRequestFacts,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->facts = $values['facts'];
    }
}
