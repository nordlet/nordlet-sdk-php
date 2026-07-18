<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsEuDistanceSalesThresholdGetResponseCurrentYear extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var string $totalAmount
     */
    #[JsonProperty('totalAmount')]
    public string $totalAmount;

    /**
     * @var int $documents
     */
    #[JsonProperty('documents')]
    public int $documents;

    /**
     * @param array{
     *   year: int,
     *   totalAmount: string,
     *   documents: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->totalAmount = $values['totalAmount'];
        $this->documents = $values['documents'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
