<?php

namespace Nordlet\Webhooks\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Webhooks\Types\SubscriptionsUpdateWebhooksRequestEventsItem;
use Nordlet\Core\Types\ArrayType;

class SubscriptionsUpdateWebhooksRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $url
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @var ?array<value-of<SubscriptionsUpdateWebhooksRequestEventsItem>> $events
     */
    #[JsonProperty('events'), ArrayType(['string'])]
    public ?array $events;

    /**
     * @var ?bool $isActive
     */
    #[JsonProperty('isActive')]
    public ?bool $isActive;

    /**
     * @param array{
     *   id: string,
     *   url?: ?string,
     *   events?: ?array<value-of<SubscriptionsUpdateWebhooksRequestEventsItem>>,
     *   isActive?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->url = $values['url'] ?? null;
        $this->events = $values['events'] ?? null;
        $this->isActive = $values['isActive'] ?? null;
    }
}
