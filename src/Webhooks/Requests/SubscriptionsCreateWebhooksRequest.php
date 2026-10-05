<?php

namespace Nordlet\Webhooks\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Webhooks\Types\SubscriptionsCreateWebhooksRequestEventsItem;
use Nordlet\Core\Types\ArrayType;

class SubscriptionsCreateWebhooksRequest extends JsonSerializableType
{
    /**
     * @var string $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @var array<value-of<SubscriptionsCreateWebhooksRequestEventsItem>> $events
     */
    #[JsonProperty('events'), ArrayType(['string'])]
    public array $events;

    /**
     * @var ?string $secret
     */
    #[JsonProperty('secret')]
    public ?string $secret;

    /**
     * @param array{
     *   url: string,
     *   events: array<value-of<SubscriptionsCreateWebhooksRequestEventsItem>>,
     *   secret?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->url = $values['url'];
        $this->events = $values['events'];
        $this->secret = $values['secret'] ?? null;
    }
}
