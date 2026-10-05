<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class LtFr0564ComputeDeclarationsResponseTotals extends JsonSerializableType
{
    /**
     * @var string $goods
     */
    #[JsonProperty('goods')]
    public string $goods;

    /**
     * @var string $triangular
     */
    #[JsonProperty('triangular')]
    public string $triangular;

    /**
     * @var string $services
     */
    #[JsonProperty('services')]
    public string $services;

    /**
     * @var int $rows
     */
    #[JsonProperty('rows')]
    public int $rows;

    /**
     * @param array{
     *   goods: string,
     *   triangular: string,
     *   services: string,
     *   rows: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->goods = $values['goods'];
        $this->triangular = $values['triangular'];
        $this->services = $values['services'];
        $this->rows = $values['rows'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
