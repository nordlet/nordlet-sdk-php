<?php

namespace Nordlet\Migration\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Migration\Types\BooksImportMigrationRequestAccountsItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Migration\Types\BooksImportMigrationRequestPartnersItem;
use Nordlet\Migration\Types\BooksImportMigrationRequestItemsItem;
use Nordlet\Migration\Types\BooksImportMigrationRequestOpeningBalances;
use Nordlet\Migration\Types\BooksImportMigrationRequestJournalItem;
use Nordlet\Migration\Types\BooksImportMigrationRequestOpenReceivablesItem;
use Nordlet\Migration\Types\BooksImportMigrationRequestOpenPayablesItem;
use Nordlet\Migration\Types\BooksImportMigrationRequestAssetGroupsItem;
use Nordlet\Migration\Types\BooksImportMigrationRequestFixedAssetsItem;
use Nordlet\Migration\Types\BooksImportMigrationRequestStockItem;

class BooksImportMigrationRequest extends JsonSerializableType
{
    /**
     * @var DateTime $cutoverDate
     */
    #[JsonProperty('cutoverDate'), Date(Date::TYPE_DATE)]
    public DateTime $cutoverDate;

    /**
     * @var ?string $source
     */
    #[JsonProperty('source')]
    public ?string $source;

    /**
     * @var ?array<BooksImportMigrationRequestAccountsItem> $accounts
     */
    #[JsonProperty('accounts'), ArrayType([BooksImportMigrationRequestAccountsItem::class])]
    public ?array $accounts;

    /**
     * @var ?array<BooksImportMigrationRequestPartnersItem> $partners
     */
    #[JsonProperty('partners'), ArrayType([BooksImportMigrationRequestPartnersItem::class])]
    public ?array $partners;

    /**
     * @var ?array<BooksImportMigrationRequestItemsItem> $items
     */
    #[JsonProperty('items'), ArrayType([BooksImportMigrationRequestItemsItem::class])]
    public ?array $items;

    /**
     * @var ?BooksImportMigrationRequestOpeningBalances $openingBalances
     */
    #[JsonProperty('openingBalances')]
    public ?BooksImportMigrationRequestOpeningBalances $openingBalances;

    /**
     * @var ?array<BooksImportMigrationRequestJournalItem> $journal
     */
    #[JsonProperty('journal'), ArrayType([BooksImportMigrationRequestJournalItem::class])]
    public ?array $journal;

    /**
     * @var ?array<BooksImportMigrationRequestOpenReceivablesItem> $openReceivables
     */
    #[JsonProperty('openReceivables'), ArrayType([BooksImportMigrationRequestOpenReceivablesItem::class])]
    public ?array $openReceivables;

    /**
     * @var ?array<BooksImportMigrationRequestOpenPayablesItem> $openPayables
     */
    #[JsonProperty('openPayables'), ArrayType([BooksImportMigrationRequestOpenPayablesItem::class])]
    public ?array $openPayables;

    /**
     * @var ?array<BooksImportMigrationRequestAssetGroupsItem> $assetGroups
     */
    #[JsonProperty('assetGroups'), ArrayType([BooksImportMigrationRequestAssetGroupsItem::class])]
    public ?array $assetGroups;

    /**
     * @var ?array<BooksImportMigrationRequestFixedAssetsItem> $fixedAssets
     */
    #[JsonProperty('fixedAssets'), ArrayType([BooksImportMigrationRequestFixedAssetsItem::class])]
    public ?array $fixedAssets;

    /**
     * @var ?array<BooksImportMigrationRequestStockItem> $stock
     */
    #[JsonProperty('stock'), ArrayType([BooksImportMigrationRequestStockItem::class])]
    public ?array $stock;

    /**
     * @param array{
     *   cutoverDate: DateTime,
     *   source?: ?string,
     *   accounts?: ?array<BooksImportMigrationRequestAccountsItem>,
     *   partners?: ?array<BooksImportMigrationRequestPartnersItem>,
     *   items?: ?array<BooksImportMigrationRequestItemsItem>,
     *   openingBalances?: ?BooksImportMigrationRequestOpeningBalances,
     *   journal?: ?array<BooksImportMigrationRequestJournalItem>,
     *   openReceivables?: ?array<BooksImportMigrationRequestOpenReceivablesItem>,
     *   openPayables?: ?array<BooksImportMigrationRequestOpenPayablesItem>,
     *   assetGroups?: ?array<BooksImportMigrationRequestAssetGroupsItem>,
     *   fixedAssets?: ?array<BooksImportMigrationRequestFixedAssetsItem>,
     *   stock?: ?array<BooksImportMigrationRequestStockItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->cutoverDate = $values['cutoverDate'];
        $this->source = $values['source'] ?? null;
        $this->accounts = $values['accounts'] ?? null;
        $this->partners = $values['partners'] ?? null;
        $this->items = $values['items'] ?? null;
        $this->openingBalances = $values['openingBalances'] ?? null;
        $this->journal = $values['journal'] ?? null;
        $this->openReceivables = $values['openReceivables'] ?? null;
        $this->openPayables = $values['openPayables'] ?? null;
        $this->assetGroups = $values['assetGroups'] ?? null;
        $this->fixedAssets = $values['fixedAssets'] ?? null;
        $this->stock = $values['stock'] ?? null;
    }
}
