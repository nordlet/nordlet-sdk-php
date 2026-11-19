<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsW2ListDeclarationsResponseFormsItemBoxE extends JsonSerializableType
{
    /**
     * @var string $firstName
     */
    #[JsonProperty('firstName')]
    public string $firstName;

    /**
     * @var string $lastName
     */
    #[JsonProperty('lastName')]
    public string $lastName;

    /**
     * @param array{
     *   firstName: string,
     *   lastName: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->firstName = $values['firstName'];
        $this->lastName = $values['lastName'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
