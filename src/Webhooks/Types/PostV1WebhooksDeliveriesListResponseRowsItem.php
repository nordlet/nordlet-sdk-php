<?php

namespace Nordlet\Webhooks\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1WebhooksDeliveriesListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $subscriptionId
     */
    #[JsonProperty('subscriptionId')]
    public string $subscriptionId;

    /**
     * @var string $eventType
     */
    #[JsonProperty('eventType')]
    public string $eventType;

    /**
     * @var value-of<PostV1WebhooksDeliveriesListResponseRowsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var int $attempts
     */
    #[JsonProperty('attempts')]
    public int $attempts;

    /**
     * @var ?string $lastError
     */
    #[JsonProperty('lastError')]
    public ?string $lastError;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var ?string $deliveredAt
     */
    #[JsonProperty('deliveredAt')]
    public ?string $deliveredAt;

    /**
     * @param array{
     *   id: string,
     *   subscriptionId: string,
     *   eventType: string,
     *   status: value-of<PostV1WebhooksDeliveriesListResponseRowsItemStatus>,
     *   attempts: int,
     *   createdAt: string,
     *   lastError?: ?string,
     *   deliveredAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->subscriptionId = $values['subscriptionId'];
        $this->eventType = $values['eventType'];
        $this->status = $values['status'];
        $this->attempts = $values['attempts'];
        $this->lastError = $values['lastError'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->deliveredAt = $values['deliveredAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
