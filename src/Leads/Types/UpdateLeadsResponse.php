<?php

namespace Nordlet\Leads\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class UpdateLeadsResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $contactName
     */
    #[JsonProperty('contactName')]
    public ?string $contactName;

    /**
     * @var ?string $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?string $website
     */
    #[JsonProperty('website')]
    public ?string $website;

    /**
     * @var ?string $countryCode
     */
    #[JsonProperty('countryCode')]
    public ?string $countryCode;

    /**
     * @var ?string $sourceId
     */
    #[JsonProperty('sourceId')]
    public ?string $sourceId;

    /**
     * @var ?string $sourceName
     */
    #[JsonProperty('sourceName')]
    public ?string $sourceName;

    /**
     * @var ?string $typeId
     */
    #[JsonProperty('typeId')]
    public ?string $typeId;

    /**
     * @var ?string $typeName
     */
    #[JsonProperty('typeName')]
    public ?string $typeName;

    /**
     * @var value-of<UpdateLeadsResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $estimatedValue
     */
    #[JsonProperty('estimatedValue')]
    public ?string $estimatedValue;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $assignedUserId
     */
    #[JsonProperty('assignedUserId')]
    public ?string $assignedUserId;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?DateTime $convertedAt
     */
    #[JsonProperty('convertedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $convertedAt;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   status: value-of<UpdateLeadsResponseStatus>,
     *   currency: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   contactName?: ?string,
     *   email?: ?string,
     *   phone?: ?string,
     *   website?: ?string,
     *   countryCode?: ?string,
     *   sourceId?: ?string,
     *   sourceName?: ?string,
     *   typeId?: ?string,
     *   typeName?: ?string,
     *   estimatedValue?: ?string,
     *   description?: ?string,
     *   assignedUserId?: ?string,
     *   partnerId?: ?string,
     *   convertedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->contactName = $values['contactName'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->website = $values['website'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->sourceId = $values['sourceId'] ?? null;
        $this->sourceName = $values['sourceName'] ?? null;
        $this->typeId = $values['typeId'] ?? null;
        $this->typeName = $values['typeName'] ?? null;
        $this->status = $values['status'];
        $this->estimatedValue = $values['estimatedValue'] ?? null;
        $this->currency = $values['currency'];
        $this->description = $values['description'] ?? null;
        $this->assignedUserId = $values['assignedUserId'] ?? null;
        $this->partnerId = $values['partnerId'] ?? null;
        $this->convertedAt = $values['convertedAt'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
