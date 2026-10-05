<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class StatementRowsListLedgerResponse extends JsonSerializableType
{
    /**
     * @var StatementRowsListLedgerResponseScheme $scheme
     */
    #[JsonProperty('scheme')]
    public StatementRowsListLedgerResponseScheme $scheme;

    /**
     * @var DateTime $fromDate
     */
    #[JsonProperty('fromDate'), Date(Date::TYPE_DATE)]
    public DateTime $fromDate;

    /**
     * @var DateTime $toDate
     */
    #[JsonProperty('toDate'), Date(Date::TYPE_DATE)]
    public DateTime $toDate;

    /**
     * @var array<StatementRowsListLedgerResponseAccountsItem> $accounts
     */
    #[JsonProperty('accounts'), ArrayType([StatementRowsListLedgerResponseAccountsItem::class])]
    public array $accounts;

    /**
     * @var array<StatementRowsListLedgerResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([StatementRowsListLedgerResponseRowsItem::class])]
    public array $rows;

    /**
     * @var array<string> $unmapped
     */
    #[JsonProperty('unmapped'), ArrayType(['string'])]
    public array $unmapped;

    /**
     * @param array{
     *   scheme: StatementRowsListLedgerResponseScheme,
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   accounts: array<StatementRowsListLedgerResponseAccountsItem>,
     *   rows: array<StatementRowsListLedgerResponseRowsItem>,
     *   unmapped: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->scheme = $values['scheme'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->accounts = $values['accounts'];
        $this->rows = $values['rows'];
        $this->unmapped = $values['unmapped'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
