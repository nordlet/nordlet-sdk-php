<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class BooksValidateMigrationResponse extends JsonSerializableType
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
     * @var BooksValidateMigrationResponseAccounts $accounts
     */
    #[JsonProperty('accounts')]
    public BooksValidateMigrationResponseAccounts $accounts;

    /**
     * @var BooksValidateMigrationResponsePartners $partners
     */
    #[JsonProperty('partners')]
    public BooksValidateMigrationResponsePartners $partners;

    /**
     * @var BooksValidateMigrationResponseItems $items
     */
    #[JsonProperty('items')]
    public BooksValidateMigrationResponseItems $items;

    /**
     * @var BooksValidateMigrationResponseAssetGroups $assetGroups
     */
    #[JsonProperty('assetGroups')]
    public BooksValidateMigrationResponseAssetGroups $assetGroups;

    /**
     * @var ?BooksValidateMigrationResponseOpeningBalances $openingBalances
     */
    #[JsonProperty('openingBalances')]
    public ?BooksValidateMigrationResponseOpeningBalances $openingBalances;

    /**
     * @var BooksValidateMigrationResponseJournal $journal
     */
    #[JsonProperty('journal')]
    public BooksValidateMigrationResponseJournal $journal;

    /**
     * @var BooksValidateMigrationResponseOpenReceivables $openReceivables
     */
    #[JsonProperty('openReceivables')]
    public BooksValidateMigrationResponseOpenReceivables $openReceivables;

    /**
     * @var BooksValidateMigrationResponseOpenPayables $openPayables
     */
    #[JsonProperty('openPayables')]
    public BooksValidateMigrationResponseOpenPayables $openPayables;

    /**
     * @var BooksValidateMigrationResponseFixedAssets $fixedAssets
     */
    #[JsonProperty('fixedAssets')]
    public BooksValidateMigrationResponseFixedAssets $fixedAssets;

    /**
     * @var BooksValidateMigrationResponseStock $stock
     */
    #[JsonProperty('stock')]
    public BooksValidateMigrationResponseStock $stock;

    /**
     * @var array<BooksValidateMigrationResponseNumberSeriesItem> $numberSeries
     */
    #[JsonProperty('numberSeries'), ArrayType([BooksValidateMigrationResponseNumberSeriesItem::class])]
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
     *   accounts: BooksValidateMigrationResponseAccounts,
     *   partners: BooksValidateMigrationResponsePartners,
     *   items: BooksValidateMigrationResponseItems,
     *   assetGroups: BooksValidateMigrationResponseAssetGroups,
     *   journal: BooksValidateMigrationResponseJournal,
     *   openReceivables: BooksValidateMigrationResponseOpenReceivables,
     *   openPayables: BooksValidateMigrationResponseOpenPayables,
     *   fixedAssets: BooksValidateMigrationResponseFixedAssets,
     *   stock: BooksValidateMigrationResponseStock,
     *   numberSeries: array<BooksValidateMigrationResponseNumberSeriesItem>,
     *   warnings: array<string>,
     *   openingBalances?: ?BooksValidateMigrationResponseOpeningBalances,
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
