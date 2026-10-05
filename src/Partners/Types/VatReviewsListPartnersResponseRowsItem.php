<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class VatReviewsListPartnersResponseRowsItem extends JsonSerializableType
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
     * @var value-of<VatReviewsListPartnersResponseRowsItemReason> $reason
     */
    #[JsonProperty('reason')]
    public string $reason;

    /**
     * @var value-of<VatReviewsListPartnersResponseRowsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?value-of<VatReviewsListPartnersResponseRowsItemResolution> $resolution
     */
    #[JsonProperty('resolution')]
    public ?string $resolution;

    /**
     * @var ?string $resolutionNote
     */
    #[JsonProperty('resolutionNote')]
    public ?string $resolutionNote;

    /**
     * @var ?VatReviewsListPartnersResponseRowsItemDetails $details
     */
    #[JsonProperty('details')]
    public ?VatReviewsListPartnersResponseRowsItemDetails $details;

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
     *   reason: value-of<VatReviewsListPartnersResponseRowsItemReason>,
     *   status: value-of<VatReviewsListPartnersResponseRowsItemStatus>,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   resolution?: ?value-of<VatReviewsListPartnersResponseRowsItemResolution>,
     *   resolutionNote?: ?string,
     *   details?: ?VatReviewsListPartnersResponseRowsItemDetails,
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
