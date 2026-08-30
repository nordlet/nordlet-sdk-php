<?php

namespace Nordlet\Migration\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Migration\Types\PostV1MigrationBooksImportRequestAccountsItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Migration\Types\PostV1MigrationBooksImportRequestPartnersItem;
use Nordlet\Migration\Types\PostV1MigrationBooksImportRequestItemsItem;
use Nordlet\Migration\Types\PostV1MigrationBooksImportRequestOpeningBalances;
use Nordlet\Migration\Types\PostV1MigrationBooksImportRequestJournalItem;
use Nordlet\Migration\Types\PostV1MigrationBooksImportRequestOpenReceivablesItem;
use Nordlet\Migration\Types\PostV1MigrationBooksImportRequestOpenPayablesItem;
use Nordlet\Migration\Types\PostV1MigrationBooksImportRequestAssetGroupsItem;
use Nordlet\Migration\Types\PostV1MigrationBooksImportRequestFixedAssetsItem;
use Nordlet\Migration\Types\PostV1MigrationBooksImportRequestStockItem;

class PostV1MigrationBooksImportRequest extends JsonSerializableType
{
    /**
     * @var string $cutoverDate
     */
    #[JsonProperty('cutoverDate')]
    public string $cutoverDate;

    /**
     * @var ?string $source
     */
    #[JsonProperty('source')]
    public ?string $source;

    /**
     * @var ?array<PostV1MigrationBooksImportRequestAccountsItem> $accounts
     */
    #[JsonProperty('accounts'), ArrayType([PostV1MigrationBooksImportRequestAccountsItem::class])]
    public ?array $accounts;

    /**
     * @var ?array<PostV1MigrationBooksImportRequestPartnersItem> $partners
     */
    #[JsonProperty('partners'), ArrayType([PostV1MigrationBooksImportRequestPartnersItem::class])]
    public ?array $partners;

    /**
     * @var ?array<PostV1MigrationBooksImportRequestItemsItem> $items
     */
    #[JsonProperty('items'), ArrayType([PostV1MigrationBooksImportRequestItemsItem::class])]
    public ?array $items;

    /**
     * @var ?PostV1MigrationBooksImportRequestOpeningBalances $openingBalances
     */
    #[JsonProperty('openingBalances')]
    public ?PostV1MigrationBooksImportRequestOpeningBalances $openingBalances;

    /**
     * @var ?array<PostV1MigrationBooksImportRequestJournalItem> $journal
     */
    #[JsonProperty('journal'), ArrayType([PostV1MigrationBooksImportRequestJournalItem::class])]
    public ?array $journal;

    /**
     * @var ?array<PostV1MigrationBooksImportRequestOpenReceivablesItem> $openReceivables
     */
    #[JsonProperty('openReceivables'), ArrayType([PostV1MigrationBooksImportRequestOpenReceivablesItem::class])]
    public ?array $openReceivables;

    /**
     * @var ?array<PostV1MigrationBooksImportRequestOpenPayablesItem> $openPayables
     */
    #[JsonProperty('openPayables'), ArrayType([PostV1MigrationBooksImportRequestOpenPayablesItem::class])]
    public ?array $openPayables;

    /**
     * @var ?array<PostV1MigrationBooksImportRequestAssetGroupsItem> $assetGroups
     */
    #[JsonProperty('assetGroups'), ArrayType([PostV1MigrationBooksImportRequestAssetGroupsItem::class])]
    public ?array $assetGroups;

    /**
     * @var ?array<PostV1MigrationBooksImportRequestFixedAssetsItem> $fixedAssets
     */
    #[JsonProperty('fixedAssets'), ArrayType([PostV1MigrationBooksImportRequestFixedAssetsItem::class])]
    public ?array $fixedAssets;

    /**
     * @var ?array<PostV1MigrationBooksImportRequestStockItem> $stock
     */
    #[JsonProperty('stock'), ArrayType([PostV1MigrationBooksImportRequestStockItem::class])]
    public ?array $stock;

    /**
     * @param array{
     *   cutoverDate: string,
     *   source?: ?string,
     *   accounts?: ?array<PostV1MigrationBooksImportRequestAccountsItem>,
     *   partners?: ?array<PostV1MigrationBooksImportRequestPartnersItem>,
     *   items?: ?array<PostV1MigrationBooksImportRequestItemsItem>,
     *   openingBalances?: ?PostV1MigrationBooksImportRequestOpeningBalances,
     *   journal?: ?array<PostV1MigrationBooksImportRequestJournalItem>,
     *   openReceivables?: ?array<PostV1MigrationBooksImportRequestOpenReceivablesItem>,
     *   openPayables?: ?array<PostV1MigrationBooksImportRequestOpenPayablesItem>,
     *   assetGroups?: ?array<PostV1MigrationBooksImportRequestAssetGroupsItem>,
     *   fixedAssets?: ?array<PostV1MigrationBooksImportRequestFixedAssetsItem>,
     *   stock?: ?array<PostV1MigrationBooksImportRequestStockItem>,
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
