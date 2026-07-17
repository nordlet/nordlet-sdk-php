<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PartnersInquiriesListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?string $partnerName
     */
    #[JsonProperty('partnerName')]
    public ?string $partnerName;

    /**
     * @var ?string $contactName
     */
    #[JsonProperty('contactName')]
    public ?string $contactName;

    /**
     * @var ?string $contactEmail
     */
    #[JsonProperty('contactEmail')]
    public ?string $contactEmail;

    /**
     * @var ?string $contactPhone
     */
    #[JsonProperty('contactPhone')]
    public ?string $contactPhone;

    /**
     * @var string $subject
     */
    #[JsonProperty('subject')]
    public string $subject;

    /**
     * @var ?string $body
     */
    #[JsonProperty('body')]
    public ?string $body;

    /**
     * @var string $channel
     */
    #[JsonProperty('channel')]
    public string $channel;

    /**
     * @var value-of<PostV1PartnersInquiriesListResponseRowsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $assignedUserId
     */
    #[JsonProperty('assignedUserId')]
    public ?string $assignedUserId;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

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
     * @var ?string $closedAt
     */
    #[JsonProperty('closedAt')]
    public ?string $closedAt;

    /**
     * @param array{
     *   id: string,
     *   subject: string,
     *   channel: string,
     *   status: value-of<PostV1PartnersInquiriesListResponseRowsItemStatus>,
     *   createdAt: string,
     *   updatedAt: string,
     *   partnerId?: ?string,
     *   partnerName?: ?string,
     *   contactName?: ?string,
     *   contactEmail?: ?string,
     *   contactPhone?: ?string,
     *   body?: ?string,
     *   assignedUserId?: ?string,
     *   notes?: ?string,
     *   closedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->partnerId = $values['partnerId'] ?? null;
        $this->partnerName = $values['partnerName'] ?? null;
        $this->contactName = $values['contactName'] ?? null;
        $this->contactEmail = $values['contactEmail'] ?? null;
        $this->contactPhone = $values['contactPhone'] ?? null;
        $this->subject = $values['subject'];
        $this->body = $values['body'] ?? null;
        $this->channel = $values['channel'];
        $this->status = $values['status'];
        $this->assignedUserId = $values['assignedUserId'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->closedAt = $values['closedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
