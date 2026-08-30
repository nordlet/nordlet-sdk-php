<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1MigrationBooksValidateResponseStock extends JsonSerializableType
{
    /**
     * @var int $movements
     */
    #[JsonProperty('movements')]
    public int $movements;

    /**
     * @var string $costTotal
     */
    #[JsonProperty('costTotal')]
    public string $costTotal;

    /**
     * @param array{
     *   movements: int,
     *   costTotal: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->movements = $values['movements'];
        $this->costTotal = $values['costTotal'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
