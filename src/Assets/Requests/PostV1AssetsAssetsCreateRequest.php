<?php

namespace Nordlet\Assets\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Assets\Types\PostV1AssetsAssetsCreateRequestDocumentsItem;
use Nordlet\Core\Types\ArrayType;

class PostV1AssetsAssetsCreateRequest extends JsonSerializableType
{
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
     * @var string $acquisitionDate
     */
    #[JsonProperty('acquisitionDate')]
    public string $acquisitionDate;

    /**
     * @var ?string $depreciationStartDate
     */
    #[JsonProperty('depreciationStartDate')]
    public ?string $depreciationStartDate;

    /**
     * @var string $acquisitionCost
     */
    #[JsonProperty('acquisitionCost')]
    public string $acquisitionCost;

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
     * @var ?array<PostV1AssetsAssetsCreateRequestDocumentsItem> $documents
     */
    #[JsonProperty('documents'), ArrayType([PostV1AssetsAssetsCreateRequestDocumentsItem::class])]
    public ?array $documents;

    /**
     * @param array{
     *   groupId: string,
     *   code: string,
     *   name: string,
     *   acquisitionDate: string,
     *   acquisitionCost: string,
     *   depreciationStartDate?: ?string,
     *   salvageValue?: ?string,
     *   usefulLifeMonths?: ?int,
     *   notes?: ?string,
     *   documents?: ?array<PostV1AssetsAssetsCreateRequestDocumentsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->groupId = $values['groupId'];
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->acquisitionDate = $values['acquisitionDate'];
        $this->depreciationStartDate = $values['depreciationStartDate'] ?? null;
        $this->acquisitionCost = $values['acquisitionCost'];
        $this->salvageValue = $values['salvageValue'] ?? null;
        $this->usefulLifeMonths = $values['usefulLifeMonths'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->documents = $values['documents'] ?? null;
    }
}
