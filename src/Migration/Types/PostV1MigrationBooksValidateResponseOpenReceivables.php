<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1MigrationBooksValidateResponseOpenReceivables extends JsonSerializableType
{
    /**
     * @var int $created
     */
    #[JsonProperty('created')]
    public int $created;

    /**
     * @var string $outstandingTotal
     */
    #[JsonProperty('outstandingTotal')]
    public string $outstandingTotal;

    /**
     * @param array{
     *   created: int,
     *   outstandingTotal: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->created = $values['created'];
        $this->outstandingTotal = $values['outstandingTotal'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
