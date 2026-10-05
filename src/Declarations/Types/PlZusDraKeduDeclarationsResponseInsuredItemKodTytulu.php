<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PlZusDraKeduDeclarationsResponseInsuredItemKodTytulu extends JsonSerializableType
{
    /**
     * @var string $p1
     */
    #[JsonProperty('p1')]
    public string $p1;

    /**
     * @var string $p2
     */
    #[JsonProperty('p2')]
    public string $p2;

    /**
     * @var string $p3
     */
    #[JsonProperty('p3')]
    public string $p3;

    /**
     * @param array{
     *   p1: string,
     *   p2: string,
     *   p3: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->p1 = $values['p1'];
        $this->p2 = $values['p2'];
        $this->p3 = $values['p3'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
