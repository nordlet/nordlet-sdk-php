<?php

namespace Nordlet\Migration\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Migration\Types\BooksValidateMigrationRequestAccountsItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Migration\Types\BooksValidateMigrationRequestPartnersItem;
use Nordlet\Migration\Types\BooksValidateMigrationRequestItemsItem;
use Nordlet\Migration\Types\BooksValidateMigrationRequestOpeningBalances;
use Nordlet\Migration\Types\BooksValidateMigrationRequestJournalItem;
use Nordlet\Migration\Types\BooksValidateMigrationRequestOpenReceivablesItem;
use Nordlet\Migration\Types\BooksValidateMigrationRequestOpenPayablesItem;
use Nordlet\Migration\Types\BooksValidateMigrationRequestAssetGroupsItem;
use Nordlet\Migration\Types\BooksValidateMigrationRequestFixedAssetsItem;
use Nordlet\Migration\Types\BooksValidateMigrationRequestStockItem;

class BooksValidateMigrationRequest extends JsonSerializableType
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
     * @var ?array<BooksValidateMigrationRequestAccountsItem> $accounts
     */
    #[JsonProperty('accounts'), ArrayType([BooksValidateMigrationRequestAccountsItem::class])]
    public ?array $accounts;

    /**
     * @var ?array<BooksValidateMigrationRequestPartnersItem> $partners
     */
    #[JsonProperty('partners'), ArrayType([BooksValidateMigrationRequestPartnersItem::class])]
    public ?array $partners;

    /**
     * @var ?array<BooksValidateMigrationRequestItemsItem> $items
     */
    #[JsonProperty('items'), ArrayType([BooksValidateMigrationRequestItemsItem::class])]
    public ?array $items;

    /**
     * @var ?BooksValidateMigrationRequestOpeningBalances $openingBalances
     */
    #[JsonProperty('openingBalances')]
    public ?BooksValidateMigrationRequestOpeningBalances $openingBalances;

    /**
     * @var ?array<BooksValidateMigrationRequestJournalItem> $journal
     */
    #[JsonProperty('journal'), ArrayType([BooksValidateMigrationRequestJournalItem::class])]
    public ?array $journal;

    /**
     * @var ?array<BooksValidateMigrationRequestOpenReceivablesItem> $openReceivables
     */
    #[JsonProperty('openReceivables'), ArrayType([BooksValidateMigrationRequestOpenReceivablesItem::class])]
    public ?array $openReceivables;

    /**
     * @var ?array<BooksValidateMigrationRequestOpenPayablesItem> $openPayables
     */
    #[JsonProperty('openPayables'), ArrayType([BooksValidateMigrationRequestOpenPayablesItem::class])]
    public ?array $openPayables;

    /**
     * @var ?array<BooksValidateMigrationRequestAssetGroupsItem> $assetGroups
     */
    #[JsonProperty('assetGroups'), ArrayType([BooksValidateMigrationRequestAssetGroupsItem::class])]
    public ?array $assetGroups;

    /**
     * @var ?array<BooksValidateMigrationRequestFixedAssetsItem> $fixedAssets
     */
    #[JsonProperty('fixedAssets'), ArrayType([BooksValidateMigrationRequestFixedAssetsItem::class])]
    public ?array $fixedAssets;

    /**
     * @var ?array<BooksValidateMigrationRequestStockItem> $stock
     */
    #[JsonProperty('stock'), ArrayType([BooksValidateMigrationRequestStockItem::class])]
    public ?array $stock;

    /**
     * @param array{
     *   cutoverDate: DateTime,
     *   source?: ?string,
     *   accounts?: ?array<BooksValidateMigrationRequestAccountsItem>,
     *   partners?: ?array<BooksValidateMigrationRequestPartnersItem>,
     *   items?: ?array<BooksValidateMigrationRequestItemsItem>,
     *   openingBalances?: ?BooksValidateMigrationRequestOpeningBalances,
     *   journal?: ?array<BooksValidateMigrationRequestJournalItem>,
     *   openReceivables?: ?array<BooksValidateMigrationRequestOpenReceivablesItem>,
     *   openPayables?: ?array<BooksValidateMigrationRequestOpenPayablesItem>,
     *   assetGroups?: ?array<BooksValidateMigrationRequestAssetGroupsItem>,
     *   fixedAssets?: ?array<BooksValidateMigrationRequestFixedAssetsItem>,
     *   stock?: ?array<BooksValidateMigrationRequestStockItem>,
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
