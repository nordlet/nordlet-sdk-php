<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1MigrationBooksValidateResponse extends JsonSerializableType
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
     * @var PostV1MigrationBooksValidateResponseAccounts $accounts
     */
    #[JsonProperty('accounts')]
    public PostV1MigrationBooksValidateResponseAccounts $accounts;

    /**
     * @var PostV1MigrationBooksValidateResponsePartners $partners
     */
    #[JsonProperty('partners')]
    public PostV1MigrationBooksValidateResponsePartners $partners;

    /**
     * @var PostV1MigrationBooksValidateResponseItems $items
     */
    #[JsonProperty('items')]
    public PostV1MigrationBooksValidateResponseItems $items;

    /**
     * @var PostV1MigrationBooksValidateResponseAssetGroups $assetGroups
     */
    #[JsonProperty('assetGroups')]
    public PostV1MigrationBooksValidateResponseAssetGroups $assetGroups;

    /**
     * @var ?PostV1MigrationBooksValidateResponseOpeningBalances $openingBalances
     */
    #[JsonProperty('openingBalances')]
    public ?PostV1MigrationBooksValidateResponseOpeningBalances $openingBalances;

    /**
     * @var PostV1MigrationBooksValidateResponseJournal $journal
     */
    #[JsonProperty('journal')]
    public PostV1MigrationBooksValidateResponseJournal $journal;

    /**
     * @var PostV1MigrationBooksValidateResponseOpenReceivables $openReceivables
     */
    #[JsonProperty('openReceivables')]
    public PostV1MigrationBooksValidateResponseOpenReceivables $openReceivables;

    /**
     * @var PostV1MigrationBooksValidateResponseOpenPayables $openPayables
     */
    #[JsonProperty('openPayables')]
    public PostV1MigrationBooksValidateResponseOpenPayables $openPayables;

    /**
     * @var PostV1MigrationBooksValidateResponseFixedAssets $fixedAssets
     */
    #[JsonProperty('fixedAssets')]
    public PostV1MigrationBooksValidateResponseFixedAssets $fixedAssets;

    /**
     * @var PostV1MigrationBooksValidateResponseStock $stock
     */
    #[JsonProperty('stock')]
    public PostV1MigrationBooksValidateResponseStock $stock;

    /**
     * @var array<PostV1MigrationBooksValidateResponseNumberSeriesItem> $numberSeries
     */
    #[JsonProperty('numberSeries'), ArrayType([PostV1MigrationBooksValidateResponseNumberSeriesItem::class])]
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
     *   accounts: PostV1MigrationBooksValidateResponseAccounts,
     *   partners: PostV1MigrationBooksValidateResponsePartners,
     *   items: PostV1MigrationBooksValidateResponseItems,
     *   assetGroups: PostV1MigrationBooksValidateResponseAssetGroups,
     *   journal: PostV1MigrationBooksValidateResponseJournal,
     *   openReceivables: PostV1MigrationBooksValidateResponseOpenReceivables,
     *   openPayables: PostV1MigrationBooksValidateResponseOpenPayables,
     *   fixedAssets: PostV1MigrationBooksValidateResponseFixedAssets,
     *   stock: PostV1MigrationBooksValidateResponseStock,
     *   numberSeries: array<PostV1MigrationBooksValidateResponseNumberSeriesItem>,
     *   warnings: array<string>,
     *   openingBalances?: ?PostV1MigrationBooksValidateResponseOpeningBalances,
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
