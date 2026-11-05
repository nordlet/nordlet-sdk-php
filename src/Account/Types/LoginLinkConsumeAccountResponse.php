<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class LoginLinkConsumeAccountResponse extends JsonSerializableType
{
    /**
     * @var string $token
     */
    #[JsonProperty('token')]
    public string $token;

    /**
     * @var DateTime $expiresAt
     */
    #[JsonProperty('expiresAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $expiresAt;

    /**
     * @var bool $twoFactorRequired
     */
    #[JsonProperty('twoFactorRequired')]
    public bool $twoFactorRequired;

    /**
     * @var LoginLinkConsumeAccountResponseUser $user
     */
    #[JsonProperty('user')]
    public LoginLinkConsumeAccountResponseUser $user;

    /**
     * @var bool $isNewUser
     */
    #[JsonProperty('isNewUser')]
    public bool $isNewUser;

    /**
     * @param array{
     *   token: string,
     *   expiresAt: DateTime,
     *   twoFactorRequired: bool,
     *   user: LoginLinkConsumeAccountResponseUser,
     *   isNewUser: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->token = $values['token'];
        $this->expiresAt = $values['expiresAt'];
        $this->twoFactorRequired = $values['twoFactorRequired'];
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
