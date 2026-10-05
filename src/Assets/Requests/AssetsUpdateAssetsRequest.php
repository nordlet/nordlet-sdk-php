<?php

namespace Nordlet\Assets\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Assets\Types\AssetsUpdateAssetsRequestDocumentsItem;
use Nordlet\Core\Types\ArrayType;

class AssetsUpdateAssetsRequest extends JsonSerializableType
{
    /**
     * @var ?string $groupId
     */
    #[JsonProperty('groupId')]
    public ?string $groupId;

    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?DateTime $acquisitionDate
     */
    #[JsonProperty('acquisitionDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $acquisitionDate;

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
     * @var ?array<AssetsUpdateAssetsRequestDocumentsItem> $documents
     */
    #[JsonProperty('documents'), ArrayType([AssetsUpdateAssetsRequestDocumentsItem::class])]
    public ?array $documents;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @param array{
     *   id: string,
     *   groupId?: ?string,
     *   code?: ?string,
     *   name?: ?string,
     *   acquisitionDate?: ?DateTime,
     *   depreciationStartDate?: ?DateTime,
     *   acquisitionCost?: ?string,
     *   salvageValue?: ?string,
     *   usefulLifeMonths?: ?int,
     *   notes?: ?string,
     *   documents?: ?array<AssetsUpdateAssetsRequestDocumentsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->groupId = $values['groupId'] ?? null;
        $this->code = $values['code'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->acquisitionDate = $values['acquisitionDate'] ?? null;
        $this->depreciationStartDate = $values['depreciationStartDate'] ?? null;
        $this->acquisitionCost = $values['acquisitionCost'] ?? null;
        $this->salvageValue = $values['salvageValue'] ?? null;
        $this->usefulLifeMonths = $values['usefulLifeMonths'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->documents = $values['documents'] ?? null;
        $this->id = $values['id'];
    }
}
