<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1LedgerStatementRowsListResponse extends JsonSerializableType
{
    /**
     * @var PostV1LedgerStatementRowsListResponseScheme $scheme
     */
    #[JsonProperty('scheme')]
    public PostV1LedgerStatementRowsListResponseScheme $scheme;

    /**
     * @var string $fromDate
     */
    #[JsonProperty('fromDate')]
    public string $fromDate;

    /**
     * @var string $toDate
     */
    #[JsonProperty('toDate')]
    public string $toDate;

    /**
     * @var array<PostV1LedgerStatementRowsListResponseAccountsItem> $accounts
     */
    #[JsonProperty('accounts'), ArrayType([PostV1LedgerStatementRowsListResponseAccountsItem::class])]
    public array $accounts;

    /**
     * @var array<PostV1LedgerStatementRowsListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1LedgerStatementRowsListResponseRowsItem::class])]
    public array $rows;

    /**
     * @var array<string> $unmapped
     */
    #[JsonProperty('unmapped'), ArrayType(['string'])]
    public array $unmapped;

    /**
     * @param array{
     *   scheme: PostV1LedgerStatementRowsListResponseScheme,
     *   fromDate: string,
     *   toDate: string,
     *   accounts: array<PostV1LedgerStatementRowsListResponseAccountsItem>,
     *   rows: array<PostV1LedgerStatementRowsListResponseRowsItem>,
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
