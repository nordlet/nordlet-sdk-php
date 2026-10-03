<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsDeReturnFactsGetResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var PostV1DeclarationsDeReturnFactsGetResponseFacts $facts
     */
    #[JsonProperty('facts')]
    public PostV1DeclarationsDeReturnFactsGetResponseFacts $facts;

    /**
     * @param array{
     *   year: int,
     *   facts: PostV1DeclarationsDeReturnFactsGetResponseFacts,
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
