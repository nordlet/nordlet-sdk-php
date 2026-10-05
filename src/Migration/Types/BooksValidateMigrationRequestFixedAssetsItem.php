<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class BooksValidateMigrationRequestFixedAssetsItem extends JsonSerializableType
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
     * @var DateTime $acquisitionDate
     */
    #[JsonProperty('acquisitionDate'), Date(Date::TYPE_DATE)]
    public DateTime $acquisitionDate;

    /**
     * @var ?DateTime $depreciationStartDate
     */
    #[JsonProperty('depreciationStartDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $depreciationStartDate;

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
     *   acquisitionDate: DateTime,
     *   acquisitionCost: string,
     *   depreciationStartDate?: ?DateTime,
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
