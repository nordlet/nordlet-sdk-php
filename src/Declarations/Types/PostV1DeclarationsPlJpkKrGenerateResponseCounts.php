<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsPlJpkKrGenerateResponseCounts extends JsonSerializableType
{
    /**
     * @var int $accounts
     */
    #[JsonProperty('accounts')]
    public int $accounts;

    /**
     * @var int $journalRows
     */
    #[JsonProperty('journalRows')]
    public int $journalRows;

    /**
     * @var int $entryRows
     */
    #[JsonProperty('entryRows')]
    public int $entryRows;

    /**
     * @param array{
     *   accounts: int,
     *   journalRows: int,
     *   entryRows: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accounts = $values['accounts'];
        $this->journalRows = $values['journalRows'];
        $this->entryRows = $values['entryRows'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
