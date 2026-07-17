<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1BankStatementsImportResponse extends JsonSerializableType
{
    /**
     * @var int $imported
     */
    #[JsonProperty('imported')]
    public int $imported;

    /**
     * @var int $skipped
     */
    #[JsonProperty('skipped')]
    public int $skipped;

    /**
     * @var array<PostV1BankStatementsImportResponseStatementsItem> $statements
     */
    #[JsonProperty('statements'), ArrayType([PostV1BankStatementsImportResponseStatementsItem::class])]
    public array $statements;

    /**
     * @param array{
     *   imported: int,
     *   skipped: int,
     *   statements: array<PostV1BankStatementsImportResponseStatementsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->imported = $values['imported'];
        $this->skipped = $values['skipped'];
        $this->statements = $values['statements'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
