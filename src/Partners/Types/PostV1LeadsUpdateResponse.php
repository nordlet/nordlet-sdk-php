<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1LeadsUpdateResponse extends JsonSerializableType
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
     * @var value-of<PostV1LeadsUpdateResponseStatus> $status
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
     * @var ?string $convertedAt
     */
    #[JsonProperty('convertedAt')]
    public ?string $convertedAt;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   status: value-of<PostV1LeadsUpdateResponseStatus>,
     *   currency: string,
     *   createdAt: string,
     *   updatedAt: string,
     *   contactName?: ?string,
     *   email?: ?string,
     *   phone?: ?string,
     *   website?: ?string,
     *   countryCode?: ?string,
     *   sourceId?: ?string,
     *   sourceName?: ?string,
     *   estimatedValue?: ?string,
     *   description?: ?string,
     *   assignedUserId?: ?string,
     *   partnerId?: ?string,
     *   convertedAt?: ?string,
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
