<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsDeReturnFactsSetResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var PostV1DeclarationsDeReturnFactsSetResponseFacts $facts
     */
    #[JsonProperty('facts')]
    public PostV1DeclarationsDeReturnFactsSetResponseFacts $facts;

    /**
     * @param array{
     *   year: int,
     *   facts: PostV1DeclarationsDeReturnFactsSetResponseFacts,
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
