<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1MigrationBooksImportResponse extends JsonSerializableType
{
    /**
     * @var bool $dryRun
     */
    #[JsonProperty('dryRun')]
    public bool $dryRun;

    /**
     * @var string $cutoverDate
     */
    #[JsonProperty('cutoverDate')]
    public string $cutoverDate;

    /**
     * @var PostV1MigrationBooksImportResponseAccounts $accounts
     */
    #[JsonProperty('accounts')]
    public PostV1MigrationBooksImportResponseAccounts $accounts;

    /**
     * @var PostV1MigrationBooksImportResponsePartners $partners
     */
    #[JsonProperty('partners')]
    public PostV1MigrationBooksImportResponsePartners $partners;

    /**
     * @var PostV1MigrationBooksImportResponseItems $items
     */
    #[JsonProperty('items')]
    public PostV1MigrationBooksImportResponseItems $items;

    /**
     * @var PostV1MigrationBooksImportResponseAssetGroups $assetGroups
     */
    #[JsonProperty('assetGroups')]
    public PostV1MigrationBooksImportResponseAssetGroups $assetGroups;

    /**
     * @var ?PostV1MigrationBooksImportResponseOpeningBalances $openingBalances
     */
    #[JsonProperty('openingBalances')]
    public ?PostV1MigrationBooksImportResponseOpeningBalances $openingBalances;

    /**
     * @var PostV1MigrationBooksImportResponseJournal $journal
     */
    #[JsonProperty('journal')]
    public PostV1MigrationBooksImportResponseJournal $journal;

    /**
     * @var PostV1MigrationBooksImportResponseOpenReceivables $openReceivables
     */
    #[JsonProperty('openReceivables')]
    public PostV1MigrationBooksImportResponseOpenReceivables $openReceivables;

    /**
     * @var PostV1MigrationBooksImportResponseOpenPayables $openPayables
     */
    #[JsonProperty('openPayables')]
    public PostV1MigrationBooksImportResponseOpenPayables $openPayables;

    /**
     * @var PostV1MigrationBooksImportResponseFixedAssets $fixedAssets
     */
    #[JsonProperty('fixedAssets')]
    public PostV1MigrationBooksImportResponseFixedAssets $fixedAssets;

    /**
     * @var PostV1MigrationBooksImportResponseStock $stock
     */
    #[JsonProperty('stock')]
    public PostV1MigrationBooksImportResponseStock $stock;

    /**
     * @var array<PostV1MigrationBooksImportResponseNumberSeriesItem> $numberSeries
     */
    #[JsonProperty('numberSeries'), ArrayType([PostV1MigrationBooksImportResponseNumberSeriesItem::class])]
    public array $numberSeries;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   dryRun: bool,
     *   cutoverDate: string,
     *   accounts: PostV1MigrationBooksImportResponseAccounts,
     *   partners: PostV1MigrationBooksImportResponsePartners,
     *   items: PostV1MigrationBooksImportResponseItems,
     *   assetGroups: PostV1MigrationBooksImportResponseAssetGroups,
     *   journal: PostV1MigrationBooksImportResponseJournal,
     *   openReceivables: PostV1MigrationBooksImportResponseOpenReceivables,
     *   openPayables: PostV1MigrationBooksImportResponseOpenPayables,
     *   fixedAssets: PostV1MigrationBooksImportResponseFixedAssets,
     *   stock: PostV1MigrationBooksImportResponseStock,
     *   numberSeries: array<PostV1MigrationBooksImportResponseNumberSeriesItem>,
     *   warnings: array<string>,
     *   openingBalances?: ?PostV1MigrationBooksImportResponseOpeningBalances,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->dryRun = $values['dryRun'];
        $this->cutoverDate = $values['cutoverDate'];
        $this->accounts = $values['accounts'];
        $this->partners = $values['partners'];
        $this->items = $values['items'];
        $this->assetGroups = $values['assetGroups'];
        $this->openingBalances = $values['openingBalances'] ?? null;
        $this->journal = $values['journal'];
        $this->openReceivables = $values['openReceivables'];
        $this->openPayables = $values['openPayables'];
        $this->fixedAssets = $values['fixedAssets'];
        $this->stock = $values['stock'];
        $this->numberSeries = $values['numberSeries'];
        $this->warnings = $values['warnings'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
