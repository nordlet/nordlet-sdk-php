<?php

namespace Nordlet\Assets\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class AssetsUpdateAssetsResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var DateTime $acquisitionDate
     */
    #[JsonProperty('acquisitionDate'), Date(Date::TYPE_DATE)]
    public DateTime $acquisitionDate;

    /**
     * @var DateTime $depreciationStartDate
     */
    #[JsonProperty('depreciationStartDate'), Date(Date::TYPE_DATE)]
    public DateTime $depreciationStartDate;

    /**
     * @var string $acquisitionCost
     */
    #[JsonProperty('acquisitionCost')]
    public string $acquisitionCost;

    /**
     * @var string $salvageValue
     */
    #[JsonProperty('salvageValue')]
    public string $salvageValue;

    /**
     * @var int $usefulLifeMonths
     */
    #[JsonProperty('usefulLifeMonths')]
    public int $usefulLifeMonths;

    /**
     * @var string $totalCost
     */
    #[JsonProperty('totalCost')]
    public string $totalCost;

    /**
     * @var string $accumulatedDepreciation
     */
    #[JsonProperty('accumulatedDepreciation')]
    public string $accumulatedDepreciation;

    /**
     * @var string $netBookValue
     */
    #[JsonProperty('netBookValue')]
    public string $netBookValue;

    /**
     * @var int $depreciatedMonths
     */
    #[JsonProperty('depreciatedMonths')]
    public int $depreciatedMonths;

    /**
     * @var int $totalLifeMonths
     */
    #[JsonProperty('totalLifeMonths')]
    public int $totalLifeMonths;

    /**
     * @var value-of<AssetsUpdateAssetsResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?array<AssetsUpdateAssetsResponseDocumentsItem> $documents
     */
    #[JsonProperty('documents'), ArrayType([AssetsUpdateAssetsResponseDocumentsItem::class])]
    public ?array $documents;

    /**
     * @var ?string $inputVatAmount
     */
    #[JsonProperty('inputVatAmount')]
    public ?string $inputVatAmount;

    /**
     * @var ?DateTime $inputVatFirstUseDate
     */
    #[JsonProperty('inputVatFirstUseDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $inputVatFirstUseDate;

    /**
     * @var ?string $inputVatDeductiblePercent
     */
    #[JsonProperty('inputVatDeductiblePercent')]
    public ?string $inputVatDeductiblePercent;

    /**
     * @var bool $inputVatRealEstate
     */
    #[JsonProperty('inputVatRealEstate')]
    public bool $inputVatRealEstate;

    /**
     * @var array<AssetsUpdateAssetsResponseInputVatUseChangesItem> $inputVatUseChanges
     */
    #[JsonProperty('inputVatUseChanges'), ArrayType([AssetsUpdateAssetsResponseInputVatUseChangesItem::class])]
    public array $inputVatUseChanges;

    /**
     * @var ?DateTime $disposalDate
     */
    #[JsonProperty('disposalDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $disposalDate;

    /**
     * @var ?value-of<AssetsUpdateAssetsResponseDisposalReason> $disposalReason
     */
    #[JsonProperty('disposalReason')]
    public ?string $disposalReason;

    /**
     * @var ?string $disposalProceeds
     */
    #[JsonProperty('disposalProceeds')]
    public ?string $disposalProceeds;

    /**
     * @var ?string $disposalJournalTransactionId
     */
    #[JsonProperty('disposalJournalTransactionId')]
    public ?string $disposalJournalTransactionId;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   groupId: string,
     *   code: string,
     *   name: string,
     *   acquisitionDate: DateTime,
     *   depreciationStartDate: DateTime,
     *   acquisitionCost: string,
     *   salvageValue: string,
     *   usefulLifeMonths: int,
     *   totalCost: string,
     *   accumulatedDepreciation: string,
     *   netBookValue: string,
     *   depreciatedMonths: int,
     *   totalLifeMonths: int,
     *   status: value-of<AssetsUpdateAssetsResponseStatus>,
     *   inputVatRealEstate: bool,
     *   inputVatUseChanges: array<AssetsUpdateAssetsResponseInputVatUseChangesItem>,
     *   createdAt: DateTime,
     *   notes?: ?string,
     *   documents?: ?array<AssetsUpdateAssetsResponseDocumentsItem>,
     *   inputVatAmount?: ?string,
     *   inputVatFirstUseDate?: ?DateTime,
     *   inputVatDeductiblePercent?: ?string,
     *   disposalDate?: ?DateTime,
     *   disposalReason?: ?value-of<AssetsUpdateAssetsResponseDisposalReason>,
     *   disposalProceeds?: ?string,
     *   disposalJournalTransactionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->groupId = $values['groupId'];
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->acquisitionDate = $values['acquisitionDate'];
        $this->depreciationStartDate = $values['depreciationStartDate'];
        $this->acquisitionCost = $values['acquisitionCost'];
        $this->salvageValue = $values['salvageValue'];
        $this->usefulLifeMonths = $values['usefulLifeMonths'];
        $this->totalCost = $values['totalCost'];
        $this->accumulatedDepreciation = $values['accumulatedDepreciation'];
        $this->netBookValue = $values['netBookValue'];
        $this->depreciatedMonths = $values['depreciatedMonths'];
        $this->totalLifeMonths = $values['totalLifeMonths'];
        $this->status = $values['status'];
        $this->notes = $values['notes'] ?? null;
        $this->documents = $values['documents'] ?? null;
        $this->inputVatAmount = $values['inputVatAmount'] ?? null;
        $this->inputVatFirstUseDate = $values['inputVatFirstUseDate'] ?? null;
        $this->inputVatDeductiblePercent = $values['inputVatDeductiblePercent'] ?? null;
        $this->inputVatRealEstate = $values['inputVatRealEstate'];
        $this->inputVatUseChanges = $values['inputVatUseChanges'];
        $this->disposalDate = $values['disposalDate'] ?? null;
        $this->disposalReason = $values['disposalReason'] ?? null;
        $this->disposalProceeds = $values['disposalProceeds'] ?? null;
        $this->disposalJournalTransactionId = $values['disposalJournalTransactionId'] ?? null;
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
