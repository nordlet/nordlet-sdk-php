<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class AddressesListPartnersResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var string $type
     */
    #[JsonProperty('type')]
    public string $type;

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
     * @var bool $isDefault
     */
    #[JsonProperty('isDefault')]
    public bool $isDefault;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   partnerId: string,
     *   type: string,
     *   isDefault: bool,
     *   createdAt: DateTime,
     *   street?: ?string,
     *   city?: ?string,
     *   postalCode?: ?string,
     *   countryCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->partnerId = $values['partnerId'];
        $this->type = $values['type'];
        $this->street = $values['street'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->postalCode = $values['postalCode'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->isDefault = $values['isDefault'];
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
