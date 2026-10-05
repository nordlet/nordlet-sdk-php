<?php

namespace Nordlet\Webhooks\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class DeliveriesListWebhooksResponseRowsItem extends JsonSerializableType
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
     * @var value-of<DeliveriesListWebhooksResponseRowsItemStatus> $status
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
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var ?DateTime $deliveredAt
     */
    #[JsonProperty('deliveredAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $deliveredAt;

    /**
     * @param array{
     *   id: string,
     *   subscriptionId: string,
     *   eventType: string,
     *   status: value-of<DeliveriesListWebhooksResponseRowsItemStatus>,
     *   attempts: int,
     *   createdAt: DateTime,
     *   lastError?: ?string,
     *   deliveredAt?: ?DateTime,
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
