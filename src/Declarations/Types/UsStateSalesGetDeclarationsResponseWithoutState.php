<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsStateSalesGetDeclarationsResponseWithoutState extends JsonSerializableType
{
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
     *   documents: float,
     *   net: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
