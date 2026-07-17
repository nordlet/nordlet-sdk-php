<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountInvitesAcceptResponse extends JsonSerializableType
{
    /**
     * @var string $token
     */
    #[JsonProperty('token')]
    public string $token;

    /**
     * @var string $expiresAt
     */
    #[JsonProperty('expiresAt')]
    public string $expiresAt;

    /**
     * @var PostV1AccountInvitesAcceptResponseUser $user
     */
    #[JsonProperty('user')]
    public PostV1AccountInvitesAcceptResponseUser $user;

    /**
     * @param array{
     *   token: string,
     *   expiresAt: string,
     *   user: PostV1AccountInvitesAcceptResponseUser,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->token = $values['token'];
        $this->expiresAt = $values['expiresAt'];
        $this->user = $values['user'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
