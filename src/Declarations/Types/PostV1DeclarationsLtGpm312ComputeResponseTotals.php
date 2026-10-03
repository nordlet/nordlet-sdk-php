<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsLtGpm312ComputeResponseTotals extends JsonSerializableType
{
    /**
     * @var string $paidAmount
     */
    #[JsonProperty('paidAmount')]
    public string $paidAmount;

    /**
     * @var string $gpmWithheld
     */
    #[JsonProperty('gpmWithheld')]
    public string $gpmWithheld;

    /**
     * @var int $persons
     */
    #[JsonProperty('persons')]
    public int $persons;

    /**
     * @param array{
     *   paidAmount: string,
     *   gpmWithheld: string,
     *   persons: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->paidAmount = $values['paidAmount'];
        $this->gpmWithheld = $values['gpmWithheld'];
        $this->persons = $values['persons'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
