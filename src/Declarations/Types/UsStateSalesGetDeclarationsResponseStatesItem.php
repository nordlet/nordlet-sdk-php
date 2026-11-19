<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsStateSalesGetDeclarationsResponseStatesItem extends JsonSerializableType
{
    /**
     * @var string $state
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @var float $documents
     */
    #[JsonProperty('documents')]
    public float $documents;

    /**
     * @var string $net
     */
    #[JsonProperty('net')]
    public string $net;

    /**
     * @param array{
     *   state: string,
     *   documents: float,
     *   net: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->state = $values['state'];
        $this->documents = $values['documents'];
        $this->net = $values['net'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
