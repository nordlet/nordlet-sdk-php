<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1MigrationBooksImportResponseOpeningBalances extends JsonSerializableType
{
    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var int $entries
     */
    #[JsonProperty('entries')]
    public int $entries;

    /**
     * @var string $debitTotal
     */
    #[JsonProperty('debitTotal')]
    public string $debitTotal;

    /**
     * @var string $creditTotal
     */
    #[JsonProperty('creditTotal')]
    public string $creditTotal;

    /**
     * @var string $balancingAmount
     */
    #[JsonProperty('balancingAmount')]
    public string $balancingAmount;

    /**
     * @param array{
     *   date: string,
     *   entries: int,
     *   debitTotal: string,
     *   creditTotal: string,
     *   balancingAmount: string,
     *   journalTransactionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
        $this->date = $values['date'];
        $this->entries = $values['entries'];
        $this->debitTotal = $values['debitTotal'];
        $this->creditTotal = $values['creditTotal'];
        $this->balancingAmount = $values['balancingAmount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
