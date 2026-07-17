<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountInvitesGetRequest extends JsonSerializableType
{
    /**
     * @var string $token
     */
    #[JsonProperty('token')]
    public string $token;

    /**
     * @param array{
     *   token: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->token = $values['token'];
    }
}
