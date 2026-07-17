<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Partners\Types\PostV1PartnersAddressesUpdateRequestType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PartnersAddressesUpdateRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<PostV1PartnersAddressesUpdateRequestType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

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
     * @var ?bool $isDefault
     */
    #[JsonProperty('isDefault')]
    public ?bool $isDefault;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @param array{
     *   id: string,
     *   type?: ?value-of<PostV1PartnersAddressesUpdateRequestType>,
     *   street?: ?string,
     *   city?: ?string,
     *   postalCode?: ?string,
     *   countryCode?: ?string,
     *   isDefault?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'] ?? null;
        $this->street = $values['street'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->postalCode = $values['postalCode'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->isDefault = $values['isDefault'] ?? null;
        $this->id = $values['id'];
    }
}
