<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Partners\Types\PostV1LeadsUpdateRequestStatus;
use Nordlet\Partners\Types\PostV1LeadsUpdateRequestDocumentsItem;
use Nordlet\Core\Types\ArrayType;

class PostV1LeadsUpdateRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

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
     * @var ?value-of<PostV1LeadsUpdateRequestStatus> $status
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?string $estimatedValue
     */
    #[JsonProperty('estimatedValue')]
    public ?string $estimatedValue;

    /**
     * @var ?string $currency
     */
    #[JsonProperty('currency')]
    public ?string $currency;

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
     * @var ?array<PostV1LeadsUpdateRequestDocumentsItem> $documents
     */
    #[JsonProperty('documents'), ArrayType([PostV1LeadsUpdateRequestDocumentsItem::class])]
    public ?array $documents;

    /**
     * @param array{
     *   id: string,
     *   name?: ?string,
     *   contactName?: ?string,
     *   email?: ?string,
     *   phone?: ?string,
     *   website?: ?string,
     *   countryCode?: ?string,
     *   sourceId?: ?string,
     *   status?: ?value-of<PostV1LeadsUpdateRequestStatus>,
     *   estimatedValue?: ?string,
     *   currency?: ?string,
     *   description?: ?string,
     *   assignedUserId?: ?string,
     *   documents?: ?array<PostV1LeadsUpdateRequestDocumentsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'] ?? null;
        $this->contactName = $values['contactName'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->website = $values['website'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->sourceId = $values['sourceId'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->estimatedValue = $values['estimatedValue'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->assignedUserId = $values['assignedUserId'] ?? null;
        $this->documents = $values['documents'] ?? null;
    }
}
