<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class CreatePartnersResponseAddress extends JsonSerializableType
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
     * @var ?string $municipality
     */
    #[JsonProperty('municipality')]
    public ?string $municipality;

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
     * @var ?string $countryCode
     */
    #[JsonProperty('countryCode')]
    public ?string $countryCode;

    /**
     * @param array{
     *   street?: ?string,
     *   city?: ?string,
     *   municipality?: ?string,
     *   county?: ?string,
     *   postalCode?: ?string,
     *   countryCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->street = $values['street'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->municipality = $values['municipality'] ?? null;
        $this->county = $values['county'] ?? null;
        $this->postalCode = $values['postalCode'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
