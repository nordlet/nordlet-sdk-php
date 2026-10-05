<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class FeedsSyncBankResponse extends JsonSerializableType
{
    /**
     * @var string $connectionId
     */
    #[JsonProperty('connectionId')]
    public string $connectionId;

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
     * @var int $partnersCreated
     */
    #[JsonProperty('partnersCreated')]
    public int $partnersCreated;

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
     * @var array<FeedsSyncBankResponseAccountsItem> $accounts
     */
    #[JsonProperty('accounts'), ArrayType([FeedsSyncBankResponseAccountsItem::class])]
    public array $accounts;

    /**
     * @param array{
     *   connectionId: string,
     *   imported: int,
     *   skipped: int,
     *   posted: int,
     *   partnersCreated: int,
     *   invoicesCreated: int,
     *   invoicesLinked: int,
     *   paymentsMatched: int,
     *   warnings: array<string>,
     *   accounts: array<FeedsSyncBankResponseAccountsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->connectionId = $values['connectionId'];
        $this->imported = $values['imported'];
        $this->skipped = $values['skipped'];
        $this->posted = $values['posted'];
        $this->partnersCreated = $values['partnersCreated'];
        $this->invoicesCreated = $values['invoicesCreated'];
        $this->invoicesLinked = $values['invoicesLinked'];
        $this->paymentsMatched = $values['paymentsMatched'];
        $this->warnings = $values['warnings'];
        $this->accounts = $values['accounts'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
