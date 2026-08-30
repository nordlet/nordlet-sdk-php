<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1MigrationBooksValidateRequestFixedAssetsItem extends JsonSerializableType
{
    /**
     * @var string $groupCode
     */
    #[JsonProperty('groupCode')]
    public string $groupCode;

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
     * @var ?string $accumulatedDepreciation
     */
    #[JsonProperty('accumulatedDepreciation')]
    public ?string $accumulatedDepreciation;

    /**
     * @var ?int $depreciatedMonths
     */
    #[JsonProperty('depreciatedMonths')]
    public ?int $depreciatedMonths;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   groupCode: string,
     *   code: string,
     *   name: string,
     *   acquisitionDate: string,
     *   acquisitionCost: string,
     *   depreciationStartDate?: ?string,
     *   salvageValue?: ?string,
     *   usefulLifeMonths?: ?int,
     *   accumulatedDepreciation?: ?string,
     *   depreciatedMonths?: ?int,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->groupCode = $values['groupCode'];
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->acquisitionDate = $values['acquisitionDate'];
        $this->depreciationStartDate = $values['depreciationStartDate'] ?? null;
        $this->acquisitionCost = $values['acquisitionCost'];
        $this->salvageValue = $values['salvageValue'] ?? null;
        $this->usefulLifeMonths = $values['usefulLifeMonths'] ?? null;
        $this->accumulatedDepreciation = $values['accumulatedDepreciation'] ?? null;
        $this->depreciatedMonths = $values['depreciatedMonths'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
