<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PartnersValidateVatResponse extends JsonSerializableType
{
    /**
     * @var bool $valid
     */
    #[JsonProperty('valid')]
    public bool $valid;

    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var string $vatNumber
     */
    #[JsonProperty('vatNumber')]
    public string $vatNumber;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $address
     */
    #[JsonProperty('address')]
    public ?string $address;

    /**
     * @var ?string $requestIdentifier
     */
    #[JsonProperty('requestIdentifier')]
    public ?string $requestIdentifier;

    /**
     * @var string $checkedAt
     */
    #[JsonProperty('checkedAt')]
    public string $checkedAt;

    /**
     * @param array{
     *   valid: bool,
     *   countryCode: string,
     *   vatNumber: string,
     *   checkedAt: string,
     *   name?: ?string,
     *   address?: ?string,
     *   requestIdentifier?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->valid = $values['valid'];
        $this->countryCode = $values['countryCode'];
        $this->vatNumber = $values['vatNumber'];
        $this->name = $values['name'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->requestIdentifier = $values['requestIdentifier'] ?? null;
        $this->checkedAt = $values['checkedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
