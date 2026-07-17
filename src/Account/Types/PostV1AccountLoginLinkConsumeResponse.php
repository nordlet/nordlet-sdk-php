<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountLoginLinkConsumeResponse extends JsonSerializableType
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
     * @var PostV1AccountLoginLinkConsumeResponseUser $user
     */
    #[JsonProperty('user')]
    public PostV1AccountLoginLinkConsumeResponseUser $user;

    /**
     * @var bool $isNewUser
     */
    #[JsonProperty('isNewUser')]
    public bool $isNewUser;

    /**
     * @param array{
     *   token: string,
     *   expiresAt: string,
     *   user: PostV1AccountLoginLinkConsumeResponseUser,
     *   isNewUser: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->token = $values['token'];
        $this->expiresAt = $values['expiresAt'];
        $this->user = $values['user'];
        $this->isNewUser = $values['isNewUser'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
