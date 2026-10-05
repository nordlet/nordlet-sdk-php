<?php

namespace Nordlet\Webhooks\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use DateTime;
use Nordlet\Core\Types\Date;

class SubscriptionsListWebhooksResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @var array<string> $events
     */
    #[JsonProperty('events'), ArrayType(['string'])]
    public array $events;

    /**
     * @var bool $isActive
     */
    #[JsonProperty('isActive')]
    public bool $isActive;

    /**
     * @var int $consecutiveFailures
     */
    #[JsonProperty('consecutiveFailures')]
    public int $consecutiveFailures;

    /**
     * @var ?value-of<SubscriptionsListWebhooksResponseRowsItemLastDeliveryStatus> $lastDeliveryStatus
     */
    #[JsonProperty('lastDeliveryStatus')]
    public ?string $lastDeliveryStatus;

    /**
     * @var ?DateTime $lastDeliveryAt
     */
    #[JsonProperty('lastDeliveryAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $lastDeliveryAt;

    /**
     * @var ?DateTime $pausedAt
     */
    #[JsonProperty('pausedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $pausedAt;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   url: string,
     *   events: array<string>,
     *   isActive: bool,
     *   consecutiveFailures: int,
     *   createdAt: DateTime,
     *   lastDeliveryStatus?: ?value-of<SubscriptionsListWebhooksResponseRowsItemLastDeliveryStatus>,
     *   lastDeliveryAt?: ?DateTime,
     *   pausedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->url = $values['url'];
        $this->events = $values['events'];
        $this->isActive = $values['isActive'];
        $this->consecutiveFailures = $values['consecutiveFailures'];
        $this->lastDeliveryStatus = $values['lastDeliveryStatus'] ?? null;
        $this->lastDeliveryAt = $values['lastDeliveryAt'] ?? null;
        $this->pausedAt = $values['pausedAt'] ?? null;
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
