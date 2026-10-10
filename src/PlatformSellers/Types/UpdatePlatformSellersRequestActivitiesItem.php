<?php

namespace Nordlet\PlatformSellers\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UpdatePlatformSellersRequestActivitiesItem extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var value-of<UpdatePlatformSellersRequestActivitiesItemActivity> $activity
     */
    #[JsonProperty('activity')]
    public string $activity;

    /**
     * @var ?UpdatePlatformSellersRequestActivitiesItemPropertyAddress $propertyAddress
     */
    #[JsonProperty('propertyAddress')]
    public ?UpdatePlatformSellersRequestActivitiesItemPropertyAddress $propertyAddress;

    /**
     * @var ?string $landRegistrationNumber
     */
    #[JsonProperty('landRegistrationNumber')]
    public ?string $landRegistrationNumber;

    /**
     * @var ?value-of<UpdatePlatformSellersRequestActivitiesItemPropertyType> $propertyType
     */
    #[JsonProperty('propertyType')]
    public ?string $propertyType;

    /**
     * @var ?string $otherPropertyType
     */
    #[JsonProperty('otherPropertyType')]
    public ?string $otherPropertyType;

    /**
     * @var ?int $rentedDays
     */
    #[JsonProperty('rentedDays')]
    public ?int $rentedDays;

    /**
     * @var array<string> $consideration
     */
    #[JsonProperty('consideration'), ArrayType(['string'])]
    public array $consideration;

    /**
     * @var array<string> $fees
     */
    #[JsonProperty('fees'), ArrayType(['string'])]
    public array $fees;

    /**
     * @var array<string> $taxes
     */
    #[JsonProperty('taxes'), ArrayType(['string'])]
    public array $taxes;

    /**
     * @var array<int> $numberOfActivities
     */
    #[JsonProperty('numberOfActivities'), ArrayType(['integer'])]
    public array $numberOfActivities;

    /**
     * @param array{
     *   year: int,
     *   activity: value-of<UpdatePlatformSellersRequestActivitiesItemActivity>,
     *   consideration: array<string>,
     *   fees: array<string>,
     *   taxes: array<string>,
     *   numberOfActivities: array<int>,
     *   propertyAddress?: ?UpdatePlatformSellersRequestActivitiesItemPropertyAddress,
     *   landRegistrationNumber?: ?string,
     *   propertyType?: ?value-of<UpdatePlatformSellersRequestActivitiesItemPropertyType>,
     *   otherPropertyType?: ?string,
     *   rentedDays?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->activity = $values['activity'];
        $this->propertyAddress = $values['propertyAddress'] ?? null;
        $this->landRegistrationNumber = $values['landRegistrationNumber'] ?? null;
        $this->propertyType = $values['propertyType'] ?? null;
        $this->otherPropertyType = $values['otherPropertyType'] ?? null;
        $this->rentedDays = $values['rentedDays'] ?? null;
        $this->consideration = $values['consideration'];
        $this->fees = $values['fees'];
        $this->taxes = $values['taxes'];
        $this->numberOfActivities = $values['numberOfActivities'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
