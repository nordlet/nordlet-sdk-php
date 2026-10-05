<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class VatReviewsResolvePartnersResponse extends JsonSerializableType
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
     * @var value-of<VatReviewsResolvePartnersResponseReason> $reason
     */
    #[JsonProperty('reason')]
    public string $reason;

    /**
     * @var value-of<VatReviewsResolvePartnersResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?value-of<VatReviewsResolvePartnersResponseResolution> $resolution
     */
    #[JsonProperty('resolution')]
    public ?string $resolution;

    /**
     * @var ?string $resolutionNote
     */
    #[JsonProperty('resolutionNote')]
    public ?string $resolutionNote;

    /**
     * @var ?VatReviewsResolvePartnersResponseDetails $details
     */
    #[JsonProperty('details')]
    public ?VatReviewsResolvePartnersResponseDetails $details;

    /**
     * @var ?DateTime $resolvedAt
     */
    #[JsonProperty('resolvedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $resolvedAt;

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
     *   partnerId: string,
     *   vatCode: string,
     *   reason: value-of<VatReviewsResolvePartnersResponseReason>,
     *   status: value-of<VatReviewsResolvePartnersResponseStatus>,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   resolution?: ?value-of<VatReviewsResolvePartnersResponseResolution>,
     *   resolutionNote?: ?string,
     *   details?: ?VatReviewsResolvePartnersResponseDetails,
     *   resolvedAt?: ?DateTime,
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
