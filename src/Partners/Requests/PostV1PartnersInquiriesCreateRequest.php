<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PartnersInquiriesCreateRequest extends JsonSerializableType
{
    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

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
     * @var ?string $channel
     */
    #[JsonProperty('channel')]
    public ?string $channel;

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
     * @param array{
     *   subject: string,
     *   partnerId?: ?string,
     *   contactName?: ?string,
     *   contactEmail?: ?string,
     *   contactPhone?: ?string,
     *   body?: ?string,
     *   channel?: ?string,
     *   assignedUserId?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerId = $values['partnerId'] ?? null;
        $this->contactName = $values['contactName'] ?? null;
        $this->contactEmail = $values['contactEmail'] ?? null;
        $this->contactPhone = $values['contactPhone'] ?? null;
        $this->subject = $values['subject'];
        $this->body = $values['body'] ?? null;
        $this->channel = $values['channel'] ?? null;
        $this->assignedUserId = $values['assignedUserId'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
