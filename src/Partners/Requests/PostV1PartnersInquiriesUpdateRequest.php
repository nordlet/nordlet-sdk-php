<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Partners\Types\PostV1PartnersInquiriesUpdateRequestStatus;

class PostV1PartnersInquiriesUpdateRequest extends JsonSerializableType
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
     * @var ?string $subject
     */
    #[JsonProperty('subject')]
    public ?string $subject;

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
     * @var ?value-of<PostV1PartnersInquiriesUpdateRequestStatus> $status
     */
    #[JsonProperty('status')]
    public ?string $status;

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
     *   id: string,
     *   partnerId?: ?string,
     *   subject?: ?string,
     *   body?: ?string,
     *   channel?: ?string,
     *   status?: ?value-of<PostV1PartnersInquiriesUpdateRequestStatus>,
     *   assignedUserId?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->partnerId = $values['partnerId'] ?? null;
        $this->subject = $values['subject'] ?? null;
        $this->body = $values['body'] ?? null;
        $this->channel = $values['channel'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->assignedUserId = $values['assignedUserId'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
