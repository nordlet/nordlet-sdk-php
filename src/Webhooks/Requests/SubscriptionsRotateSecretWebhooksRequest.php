<?php

namespace Nordlet\Webhooks\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class SubscriptionsRotateSecretWebhooksRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $secret
     */
    #[JsonProperty('secret')]
    public ?string $secret;

    /**
     * @param array{
     *   id: string,
     *   secret?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->secret = $values['secret'] ?? null;
    }
}
