<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsIeB1GenerateResponseMembersItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $identifier
     */
    #[JsonProperty('identifier')]
    public ?string $identifier;

    /**
     * @var ?string $sharesQuantity
     */
    #[JsonProperty('sharesQuantity')]
    public ?string $sharesQuantity;

    /**
     * @var ?string $sharesAmount
     */
    #[JsonProperty('sharesAmount')]
    public ?string $sharesAmount;

    /**
     * @var ?string $sharesType
     */
    #[JsonProperty('sharesType')]
    public ?string $sharesType;

    /**
     * @var ?string $acquisitionDate
     */
    #[JsonProperty('acquisitionDate')]
    public ?string $acquisitionDate;

    /**
     * @param array{
     *   name: string,
     *   identifier?: ?string,
     *   sharesQuantity?: ?string,
     *   sharesAmount?: ?string,
     *   sharesType?: ?string,
     *   acquisitionDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->identifier = $values['identifier'] ?? null;
        $this->sharesQuantity = $values['sharesQuantity'] ?? null;
        $this->sharesAmount = $values['sharesAmount'] ?? null;
        $this->sharesType = $values['sharesType'] ?? null;
        $this->acquisitionDate = $values['acquisitionDate'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
