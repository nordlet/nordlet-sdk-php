<?php

namespace Nordlet\Capture\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Capture\Types\PostV1CaptureInboundEmailRequestToFullItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Capture\Types\PostV1CaptureInboundEmailRequestAttachmentsItem;
use Nordlet\Core\Types\Union;

class PostV1CaptureInboundEmailRequest extends JsonSerializableType
{
    /**
     * @var ?string $postmarkTo
     */
    #[JsonProperty('To')]
    public ?string $postmarkTo;

    /**
     * @var ?array<PostV1CaptureInboundEmailRequestToFullItem> $toFull
     */
    #[JsonProperty('ToFull'), ArrayType([PostV1CaptureInboundEmailRequestToFullItem::class])]
    public ?array $toFull;

    /**
     * @var ?string $postmarkFrom
     */
    #[JsonProperty('From')]
    public ?string $postmarkFrom;

    /**
     * @var ?string $postmarkSubject
     */
    #[JsonProperty('Subject')]
    public ?string $postmarkSubject;

    /**
     * @var ?array<PostV1CaptureInboundEmailRequestAttachmentsItem> $postmarkAttachments
     */
    #[JsonProperty('Attachments'), ArrayType([PostV1CaptureInboundEmailRequestAttachmentsItem::class])]
    public ?array $postmarkAttachments;

    /**
     * @var (
     *    string
     *   |array<string>
     * )|null $to
     */
    #[JsonProperty('to'), Union('string', ['string'], 'null')]
    public string|array|null $to;

    /**
     * @var ?string $from
     */
    #[JsonProperty('from')]
    public ?string $from;

    /**
     * @var ?string $subject
     */
    #[JsonProperty('subject')]
    public ?string $subject;

    /**
     * @var ?array<PostV1CaptureInboundEmailRequestAttachmentsItem> $attachments
     */
    #[JsonProperty('attachments'), ArrayType([PostV1CaptureInboundEmailRequestAttachmentsItem::class])]
    public ?array $attachments;

    /**
     * @param array{
     *   postmarkTo?: ?string,
     *   toFull?: ?array<PostV1CaptureInboundEmailRequestToFullItem>,
     *   postmarkFrom?: ?string,
     *   postmarkSubject?: ?string,
     *   postmarkAttachments?: ?array<PostV1CaptureInboundEmailRequestAttachmentsItem>,
     *   to?: (
     *    string
     *   |array<string>
     * )|null,
     *   from?: ?string,
     *   subject?: ?string,
     *   attachments?: ?array<PostV1CaptureInboundEmailRequestAttachmentsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->postmarkTo = $values['postmarkTo'] ?? null;
        $this->toFull = $values['toFull'] ?? null;
        $this->postmarkFrom = $values['postmarkFrom'] ?? null;
        $this->postmarkSubject = $values['postmarkSubject'] ?? null;
        $this->postmarkAttachments = $values['postmarkAttachments'] ?? null;
        $this->to = $values['to'] ?? null;
        $this->from = $values['from'] ?? null;
        $this->subject = $values['subject'] ?? null;
        $this->attachments = $values['attachments'] ?? null;
    }
}
