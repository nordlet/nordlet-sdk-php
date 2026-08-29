<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PartnersVatReviewsResolveResponse extends JsonSerializableType
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
     * @var string $vatCode
     */
    #[JsonProperty('vatCode')]
    public string $vatCode;

    /**
     * @var value-of<PostV1PartnersVatReviewsResolveResponseReason> $reason
     */
    #[JsonProperty('reason')]
    public string $reason;

    /**
     * @var value-of<PostV1PartnersVatReviewsResolveResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?value-of<PostV1PartnersVatReviewsResolveResponseResolution> $resolution
     */
    #[JsonProperty('resolution')]
    public ?string $resolution;

    /**
     * @var ?string $resolutionNote
     */
    #[JsonProperty('resolutionNote')]
    public ?string $resolutionNote;

    /**
     * @var ?PostV1PartnersVatReviewsResolveResponseDetails $details
     */
    #[JsonProperty('details')]
    public ?PostV1PartnersVatReviewsResolveResponseDetails $details;

    /**
     * @var ?string $resolvedAt
     */
    #[JsonProperty('resolvedAt')]
    public ?string $resolvedAt;

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
     *   partnerId: string,
     *   vatCode: string,
     *   reason: value-of<PostV1PartnersVatReviewsResolveResponseReason>,
     *   status: value-of<PostV1PartnersVatReviewsResolveResponseStatus>,
     *   createdAt: string,
     *   updatedAt: string,
     *   resolution?: ?value-of<PostV1PartnersVatReviewsResolveResponseResolution>,
     *   resolutionNote?: ?string,
     *   details?: ?PostV1PartnersVatReviewsResolveResponseDetails,
     *   resolvedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->partnerId = $values['partnerId'];
        $this->vatCode = $values['vatCode'];
        $this->reason = $values['reason'];
        $this->status = $values['status'];
        $this->resolution = $values['resolution'] ?? null;
        $this->resolutionNote = $values['resolutionNote'] ?? null;
        $this->details = $values['details'] ?? null;
        $this->resolvedAt = $values['resolvedAt'] ?? null;
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
