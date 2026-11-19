<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class CompaniesHouseGetPartnersResponseAddress extends JsonSerializableType
{
    /**
     * @var ?string $street
     */
    #[JsonProperty('street')]
    public ?string $street;

    /**
     * @var ?string $city
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $county
     */
    #[JsonProperty('county')]
    public ?string $county;

    /**
     * @var ?string $postalCode
     */
    #[JsonProperty('postalCode')]
    public ?string $postalCode;

    /**
     * @var value-of<CompaniesHouseGetPartnersResponseAddressCountryCode> $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var ?string $subdivision
     */
    #[JsonProperty('subdivision')]
    public ?string $subdivision;

    /**
     * @param array{
     *   countryCode: value-of<CompaniesHouseGetPartnersResponseAddressCountryCode>,
     *   street?: ?string,
     *   city?: ?string,
     *   county?: ?string,
     *   postalCode?: ?string,
     *   subdivision?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->street = $values['street'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->county = $values['county'] ?? null;
        $this->postalCode = $values['postalCode'] ?? null;
        $this->countryCode = $values['countryCode'];
        $this->subdivision = $values['subdivision'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
