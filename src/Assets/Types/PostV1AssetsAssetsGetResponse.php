<?php

namespace Nordlet\Assets\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AssetsAssetsGetResponse extends JsonSerializableType
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
     * @var string $acquisitionDate
     */
    #[JsonProperty('acquisitionDate')]
    public string $acquisitionDate;

    /**
     * @var string $depreciationStartDate
     */
    #[JsonProperty('depreciationStartDate')]
    public string $depreciationStartDate;

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
     * @var value-of<PostV1AssetsAssetsGetResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   groupId: string,
     *   code: string,
     *   name: string,
     *   acquisitionDate: string,
     *   depreciationStartDate: string,
     *   acquisitionCost: string,
     *   salvageValue: string,
     *   usefulLifeMonths: int,
     *   totalCost: string,
     *   accumulatedDepreciation: string,
     *   netBookValue: string,
     *   depreciatedMonths: int,
     *   totalLifeMonths: int,
     *   status: value-of<PostV1AssetsAssetsGetResponseStatus>,
     *   createdAt: string,
     *   notes?: ?string,
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
