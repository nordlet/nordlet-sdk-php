<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Partners\Types\AddressesCreatePartnersRequestType;
use Nordlet\Core\Json\JsonProperty;

class AddressesCreatePartnersRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<AddressesCreatePartnersRequestType> $type
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
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @param array{
     *   partnerId: string,
     *   type?: ?value-of<AddressesCreatePartnersRequestType>,
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
        $this->partnerId = $values['partnerId'];
    }
}
