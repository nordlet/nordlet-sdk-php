<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\PostV1DeclarationsDeReturnFactsSetRequestFacts;

class PostV1DeclarationsDeReturnFactsSetRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var PostV1DeclarationsDeReturnFactsSetRequestFacts $facts
     */
    #[JsonProperty('facts')]
    public PostV1DeclarationsDeReturnFactsSetRequestFacts $facts;

    /**
     * @param array{
     *   year: int,
     *   facts: PostV1DeclarationsDeReturnFactsSetRequestFacts,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->facts = $values['facts'];
    }
}
