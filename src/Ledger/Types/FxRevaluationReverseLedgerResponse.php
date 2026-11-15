<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class FxRevaluationReverseLedgerResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var array<string> $undoJournalTransactionIds
     */
    #[JsonProperty('undoJournalTransactionIds'), ArrayType(['string'])]
    public array $undoJournalTransactionIds;

    /**
     * @param array{
     *   id: string,
     *   undoJournalTransactionIds: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->undoJournalTransactionIds = $values['undoJournalTransactionIds'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
