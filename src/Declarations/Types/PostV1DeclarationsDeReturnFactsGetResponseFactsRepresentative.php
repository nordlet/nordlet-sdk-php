<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsDeReturnFactsGetResponseFactsRepresentative extends JsonSerializableType
{
    /**
     * @var value-of<PostV1DeclarationsDeReturnFactsGetResponseFactsRepresentativeRole> $role
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $street
     */
    #[JsonProperty('street')]
    public string $street;

    /**
     * @var ?string $houseNumber
     */
    #[JsonProperty('houseNumber')]
    public ?string $houseNumber;

    /**
     * @var string $postalCode
     */
    #[JsonProperty('postalCode')]
    public string $postalCode;

    /**
     * @var string $city
     */
    #[JsonProperty('city')]
    public string $city;

    /**
     * @param array{
     *   role: value-of<PostV1DeclarationsDeReturnFactsGetResponseFactsRepresentativeRole>,
     *   name: string,
     *   street: string,
     *   postalCode: string,
     *   city: string,
     *   houseNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->role = $values['role'];
        $this->name = $values['name'];
        $this->street = $values['street'];
        $this->houseNumber = $values['houseNumber'] ?? null;
        $this->postalCode = $values['postalCode'];
        $this->city = $values['city'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
