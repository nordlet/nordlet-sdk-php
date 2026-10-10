<?php

namespace Nordlet\PlatformSellers\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UpdatePlatformSellersResponseActivitiesItemPropertyAddress extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var ?string $street
     */
    #[JsonProperty('street')]
    public ?string $street;

    /**
     * @var ?string $buildingIdentifier
     */
    #[JsonProperty('buildingIdentifier')]
    public ?string $buildingIdentifier;

    /**
     * @var ?string $postCode
     */
    #[JsonProperty('postCode')]
    public ?string $postCode;

    /**
     * @var ?string $city
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $free
     */
    #[JsonProperty('free')]
    public ?string $free;

    /**
     * @param array{
     *   countryCode: string,
     *   street?: ?string,
     *   buildingIdentifier?: ?string,
     *   postCode?: ?string,
     *   city?: ?string,
     *   free?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->street = $values['street'] ?? null;
        $this->buildingIdentifier = $values['buildingIdentifier'] ?? null;
        $this->postCode = $values['postCode'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->free = $values['free'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
