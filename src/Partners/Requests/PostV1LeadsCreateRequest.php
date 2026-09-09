<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Partners\Types\PostV1LeadsCreateRequestStatus;
use Nordlet\Partners\Types\PostV1LeadsCreateRequestDocumentsItem;
use Nordlet\Core\Types\ArrayType;

class PostV1LeadsCreateRequest extends JsonSerializableType
{
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
     * @var ?value-of<PostV1LeadsCreateRequestStatus> $status
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
     * @var ?array<PostV1LeadsCreateRequestDocumentsItem> $documents
     */
    #[JsonProperty('documents'), ArrayType([PostV1LeadsCreateRequestDocumentsItem::class])]
    public ?array $documents;

    /**
     * @var ?array<string> $notes
     */
    #[JsonProperty('notes'), ArrayType(['string'])]
    public ?array $notes;

    /**
     * @param array{
     *   name: string,
     *   contactName?: ?string,
     *   email?: ?string,
     *   phone?: ?string,
     *   website?: ?string,
     *   countryCode?: ?string,
     *   sourceId?: ?string,
     *   status?: ?value-of<PostV1LeadsCreateRequestStatus>,
     *   estimatedValue?: ?string,
     *   currency?: ?string,
     *   description?: ?string,
     *   assignedUserId?: ?string,
     *   documents?: ?array<PostV1LeadsCreateRequestDocumentsItem>,
     *   notes?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
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
        $this->notes = $values['notes'] ?? null;
    }
}
