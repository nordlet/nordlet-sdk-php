<?php

namespace Nordlet\Leads\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Leads\Types\CreateLeadsRequestStatus;
use Nordlet\Leads\Types\CreateLeadsRequestDocumentsItem;
use Nordlet\Core\Types\ArrayType;

class CreateLeadsRequest extends JsonSerializableType
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
     * @var ?string $typeId
     */
    #[JsonProperty('typeId')]
    public ?string $typeId;

    /**
     * @var ?value-of<CreateLeadsRequestStatus> $status
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
     * @var ?array<CreateLeadsRequestDocumentsItem> $documents
     */
    #[JsonProperty('documents'), ArrayType([CreateLeadsRequestDocumentsItem::class])]
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
     *   typeId?: ?string,
     *   status?: ?value-of<CreateLeadsRequestStatus>,
     *   estimatedValue?: ?string,
     *   currency?: ?string,
     *   description?: ?string,
     *   assignedUserId?: ?string,
     *   documents?: ?array<CreateLeadsRequestDocumentsItem>,
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
        $this->typeId = $values['typeId'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->estimatedValue = $values['estimatedValue'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->assignedUserId = $values['assignedUserId'] ?? null;
        $this->documents = $values['documents'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
