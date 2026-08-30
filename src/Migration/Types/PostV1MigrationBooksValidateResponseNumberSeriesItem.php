<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1MigrationBooksValidateResponseNumberSeriesItem extends JsonSerializableType
{
    /**
     * @var string $prefix
     */
    #[JsonProperty('prefix')]
    public string $prefix;

    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $nextNumber
     */
    #[JsonProperty('nextNumber')]
    public int $nextNumber;

    /**
     * @param array{
     *   prefix: string,
     *   year: int,
     *   nextNumber: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->prefix = $values['prefix'];
        $this->year = $values['year'];
        $this->nextNumber = $values['nextNumber'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
