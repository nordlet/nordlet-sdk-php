<?php

namespace Nordlet\Assets\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Assets\Types\AssetsCreateFromPurchaseAssetsRequestDocumentsItem;
use Nordlet\Core\Types\ArrayType;

class AssetsCreateFromPurchaseAssetsRequest extends JsonSerializableType
{
    /**
     * @var string $purchaseInvoiceLineId
     */
    #[JsonProperty('purchaseInvoiceLineId')]
    public string $purchaseInvoiceLineId;

    /**
     * @var string $groupId
     */
    #[JsonProperty('groupId')]
    public string $groupId;

    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?DateTime $depreciationStartDate
     */
    #[JsonProperty('depreciationStartDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $depreciationStartDate;

    /**
     * @var ?string $acquisitionCost
     */
    #[JsonProperty('acquisitionCost')]
    public ?string $acquisitionCost;

    /**
     * @var ?string $salvageValue
     */
    #[JsonProperty('salvageValue')]
    public ?string $salvageValue;

    /**
     * @var ?int $usefulLifeMonths
     */
    #[JsonProperty('usefulLifeMonths')]
    public ?int $usefulLifeMonths;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?array<AssetsCreateFromPurchaseAssetsRequestDocumentsItem> $documents
     */
    #[JsonProperty('documents'), ArrayType([AssetsCreateFromPurchaseAssetsRequestDocumentsItem::class])]
    public ?array $documents;

    /**
     * @param array{
     *   purchaseInvoiceLineId: string,
     *   groupId: string,
     *   code: string,
     *   name?: ?string,
     *   depreciationStartDate?: ?DateTime,
     *   acquisitionCost?: ?string,
     *   salvageValue?: ?string,
     *   usefulLifeMonths?: ?int,
     *   notes?: ?string,
     *   documents?: ?array<AssetsCreateFromPurchaseAssetsRequestDocumentsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->purchaseInvoiceLineId = $values['purchaseInvoiceLineId'];
        $this->groupId = $values['groupId'];
        $this->code = $values['code'];
        $this->name = $values['name'] ?? null;
        $this->depreciationStartDate = $values['depreciationStartDate'] ?? null;
        $this->acquisitionCost = $values['acquisitionCost'] ?? null;
        $this->salvageValue = $values['salvageValue'] ?? null;
        $this->usefulLifeMonths = $values['usefulLifeMonths'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->documents = $values['documents'] ?? null;
    }
}
