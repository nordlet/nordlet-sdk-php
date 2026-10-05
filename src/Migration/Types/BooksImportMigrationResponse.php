<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class BooksImportMigrationResponse extends JsonSerializableType
{
    /**
     * @var bool $dryRun
     */
    #[JsonProperty('dryRun')]
    public bool $dryRun;

    /**
     * @var DateTime $cutoverDate
     */
    #[JsonProperty('cutoverDate'), Date(Date::TYPE_DATE)]
    public DateTime $cutoverDate;

    /**
     * @var BooksImportMigrationResponseAccounts $accounts
     */
    #[JsonProperty('accounts')]
    public BooksImportMigrationResponseAccounts $accounts;

    /**
     * @var BooksImportMigrationResponsePartners $partners
     */
    #[JsonProperty('partners')]
    public BooksImportMigrationResponsePartners $partners;

    /**
     * @var BooksImportMigrationResponseItems $items
     */
    #[JsonProperty('items')]
    public BooksImportMigrationResponseItems $items;

    /**
     * @var BooksImportMigrationResponseAssetGroups $assetGroups
     */
    #[JsonProperty('assetGroups')]
    public BooksImportMigrationResponseAssetGroups $assetGroups;

    /**
     * @var ?BooksImportMigrationResponseOpeningBalances $openingBalances
     */
    #[JsonProperty('openingBalances')]
    public ?BooksImportMigrationResponseOpeningBalances $openingBalances;

    /**
     * @var BooksImportMigrationResponseJournal $journal
     */
    #[JsonProperty('journal')]
    public BooksImportMigrationResponseJournal $journal;

    /**
     * @var BooksImportMigrationResponseOpenReceivables $openReceivables
     */
    #[JsonProperty('openReceivables')]
    public BooksImportMigrationResponseOpenReceivables $openReceivables;

    /**
     * @var BooksImportMigrationResponseOpenPayables $openPayables
     */
    #[JsonProperty('openPayables')]
    public BooksImportMigrationResponseOpenPayables $openPayables;

    /**
     * @var BooksImportMigrationResponseFixedAssets $fixedAssets
     */
    #[JsonProperty('fixedAssets')]
    public BooksImportMigrationResponseFixedAssets $fixedAssets;

    /**
     * @var BooksImportMigrationResponseStock $stock
     */
    #[JsonProperty('stock')]
    public BooksImportMigrationResponseStock $stock;

    /**
     * @var array<BooksImportMigrationResponseNumberSeriesItem> $numberSeries
     */
    #[JsonProperty('numberSeries'), ArrayType([BooksImportMigrationResponseNumberSeriesItem::class])]
    public array $numberSeries;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   dryRun: bool,
     *   cutoverDate: DateTime,
     *   accounts: BooksImportMigrationResponseAccounts,
     *   partners: BooksImportMigrationResponsePartners,
     *   items: BooksImportMigrationResponseItems,
     *   assetGroups: BooksImportMigrationResponseAssetGroups,
     *   journal: BooksImportMigrationResponseJournal,
     *   openReceivables: BooksImportMigrationResponseOpenReceivables,
     *   openPayables: BooksImportMigrationResponseOpenPayables,
     *   fixedAssets: BooksImportMigrationResponseFixedAssets,
     *   stock: BooksImportMigrationResponseStock,
     *   numberSeries: array<BooksImportMigrationResponseNumberSeriesItem>,
     *   warnings: array<string>,
     *   openingBalances?: ?BooksImportMigrationResponseOpeningBalances,
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
