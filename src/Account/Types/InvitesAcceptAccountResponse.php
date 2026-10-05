<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class InvitesAcceptAccountResponse extends JsonSerializableType
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
     * @var InvitesAcceptAccountResponseUser $user
     */
    #[JsonProperty('user')]
    public InvitesAcceptAccountResponseUser $user;

    /**
     * @param array{
     *   token: string,
     *   expiresAt: DateTime,
     *   user: InvitesAcceptAccountResponseUser,
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
