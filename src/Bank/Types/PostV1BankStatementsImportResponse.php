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
     * @var int $posted
     */
    #[JsonProperty('posted')]
    public int $posted;

    /**
     * @var int $customersCreated
     */
    #[JsonProperty('customersCreated')]
    public int $customersCreated;

    /**
     * @var int $invoicesCreated
     */
    #[JsonProperty('invoicesCreated')]
    public int $invoicesCreated;

    /**
     * @var int $invoicesLinked
     */
    #[JsonProperty('invoicesLinked')]
    public int $invoicesLinked;

    /**
     * @var int $creditNotesCreated
     */
    #[JsonProperty('creditNotesCreated')]
    public int $creditNotesCreated;

    /**
     * @var int $paymentsMatched
     */
    #[JsonProperty('paymentsMatched')]
    public int $paymentsMatched;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @var array<PostV1BankStatementsImportResponseStatementsItem> $statements
     */
    #[JsonProperty('statements'), ArrayType([PostV1BankStatementsImportResponseStatementsItem::class])]
    public array $statements;

    /**
     * @param array{
     *   imported: int,
     *   skipped: int,
     *   posted: int,
     *   customersCreated: int,
     *   invoicesCreated: int,
     *   invoicesLinked: int,
     *   creditNotesCreated: int,
     *   paymentsMatched: int,
     *   warnings: array<string>,
     *   statements: array<PostV1BankStatementsImportResponseStatementsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->imported = $values['imported'];
        $this->skipped = $values['skipped'];
        $this->posted = $values['posted'];
        $this->customersCreated = $values['customersCreated'];
        $this->invoicesCreated = $values['invoicesCreated'];
        $this->invoicesLinked = $values['invoicesLinked'];
        $this->creditNotesCreated = $values['creditNotesCreated'];
        $this->paymentsMatched = $values['paymentsMatched'];
        $this->warnings = $values['warnings'];
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
