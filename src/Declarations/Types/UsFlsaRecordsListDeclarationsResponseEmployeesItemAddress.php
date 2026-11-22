<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsFlsaRecordsListDeclarationsResponseEmployeesItemAddress extends JsonSerializableType
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
     * @var ?string $subdivision
     */
    #[JsonProperty('subdivision')]
    public ?string $subdivision;

    /**
     * @var ?string $postalCode
     */
    #[JsonProperty('postalCode')]
    public ?string $postalCode;

    /**
     * @param array{
     *   street?: ?string,
     *   city?: ?string,
     *   subdivision?: ?string,
     *   postalCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->street = $values['street'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->subdivision = $values['subdivision'] ?? null;
        $this->postalCode = $values['postalCode'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
