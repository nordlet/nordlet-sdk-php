<?php

namespace Nordlet\Webhooks\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1WebhooksSubscriptionsCreateRequest extends JsonSerializableType
{
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
     * @var ?string $secret
     */
    #[JsonProperty('secret')]
    public ?string $secret;

    /**
     * @param array{
     *   url: string,
     *   events: array<string>,
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
