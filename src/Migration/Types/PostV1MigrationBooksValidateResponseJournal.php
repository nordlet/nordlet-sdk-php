<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1MigrationBooksValidateResponseJournal extends JsonSerializableType
{
    /**
     * @var int $transactions
     */
    #[JsonProperty('transactions')]
    public int $transactions;

    /**
     * @var int $entries
     */
    #[JsonProperty('entries')]
    public int $entries;

    /**
     * @param array{
     *   transactions: int,
     *   entries: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->transactions = $values['transactions'];
        $this->entries = $values['entries'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
