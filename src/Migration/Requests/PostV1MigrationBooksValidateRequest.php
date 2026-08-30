<?php

namespace Nordlet\Migration\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Migration\Types\PostV1MigrationBooksValidateRequestAccountsItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Migration\Types\PostV1MigrationBooksValidateRequestPartnersItem;
use Nordlet\Migration\Types\PostV1MigrationBooksValidateRequestItemsItem;
use Nordlet\Migration\Types\PostV1MigrationBooksValidateRequestOpeningBalances;
use Nordlet\Migration\Types\PostV1MigrationBooksValidateRequestJournalItem;
use Nordlet\Migration\Types\PostV1MigrationBooksValidateRequestOpenReceivablesItem;
use Nordlet\Migration\Types\PostV1MigrationBooksValidateRequestOpenPayablesItem;
use Nordlet\Migration\Types\PostV1MigrationBooksValidateRequestAssetGroupsItem;
use Nordlet\Migration\Types\PostV1MigrationBooksValidateRequestFixedAssetsItem;
use Nordlet\Migration\Types\PostV1MigrationBooksValidateRequestStockItem;

class PostV1MigrationBooksValidateRequest extends JsonSerializableType
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
     * @var ?array<PostV1MigrationBooksValidateRequestAccountsItem> $accounts
     */
    #[JsonProperty('accounts'), ArrayType([PostV1MigrationBooksValidateRequestAccountsItem::class])]
    public ?array $accounts;

    /**
     * @var ?array<PostV1MigrationBooksValidateRequestPartnersItem> $partners
     */
    #[JsonProperty('partners'), ArrayType([PostV1MigrationBooksValidateRequestPartnersItem::class])]
    public ?array $partners;

    /**
     * @var ?array<PostV1MigrationBooksValidateRequestItemsItem> $items
     */
    #[JsonProperty('items'), ArrayType([PostV1MigrationBooksValidateRequestItemsItem::class])]
    public ?array $items;

    /**
     * @var ?PostV1MigrationBooksValidateRequestOpeningBalances $openingBalances
     */
    #[JsonProperty('openingBalances')]
    public ?PostV1MigrationBooksValidateRequestOpeningBalances $openingBalances;

    /**
     * @var ?array<PostV1MigrationBooksValidateRequestJournalItem> $journal
     */
    #[JsonProperty('journal'), ArrayType([PostV1MigrationBooksValidateRequestJournalItem::class])]
    public ?array $journal;

    /**
     * @var ?array<PostV1MigrationBooksValidateRequestOpenReceivablesItem> $openReceivables
     */
    #[JsonProperty('openReceivables'), ArrayType([PostV1MigrationBooksValidateRequestOpenReceivablesItem::class])]
    public ?array $openReceivables;

    /**
     * @var ?array<PostV1MigrationBooksValidateRequestOpenPayablesItem> $openPayables
     */
    #[JsonProperty('openPayables'), ArrayType([PostV1MigrationBooksValidateRequestOpenPayablesItem::class])]
    public ?array $openPayables;

    /**
     * @var ?array<PostV1MigrationBooksValidateRequestAssetGroupsItem> $assetGroups
     */
    #[JsonProperty('assetGroups'), ArrayType([PostV1MigrationBooksValidateRequestAssetGroupsItem::class])]
    public ?array $assetGroups;

    /**
     * @var ?array<PostV1MigrationBooksValidateRequestFixedAssetsItem> $fixedAssets
     */
    #[JsonProperty('fixedAssets'), ArrayType([PostV1MigrationBooksValidateRequestFixedAssetsItem::class])]
    public ?array $fixedAssets;

    /**
     * @var ?array<PostV1MigrationBooksValidateRequestStockItem> $stock
     */
    #[JsonProperty('stock'), ArrayType([PostV1MigrationBooksValidateRequestStockItem::class])]
    public ?array $stock;

    /**
     * @param array{
     *   cutoverDate: string,
     *   source?: ?string,
     *   accounts?: ?array<PostV1MigrationBooksValidateRequestAccountsItem>,
     *   partners?: ?array<PostV1MigrationBooksValidateRequestPartnersItem>,
     *   items?: ?array<PostV1MigrationBooksValidateRequestItemsItem>,
     *   openingBalances?: ?PostV1MigrationBooksValidateRequestOpeningBalances,
     *   journal?: ?array<PostV1MigrationBooksValidateRequestJournalItem>,
     *   openReceivables?: ?array<PostV1MigrationBooksValidateRequestOpenReceivablesItem>,
     *   openPayables?: ?array<PostV1MigrationBooksValidateRequestOpenPayablesItem>,
     *   assetGroups?: ?array<PostV1MigrationBooksValidateRequestAssetGroupsItem>,
     *   fixedAssets?: ?array<PostV1MigrationBooksValidateRequestFixedAssetsItem>,
     *   stock?: ?array<PostV1MigrationBooksValidateRequestStockItem>,
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
