<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountInvitesCreateResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $email
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var string $role
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var string $expiresAt
     */
    #[JsonProperty('expiresAt')]
    public string $expiresAt;

    /**
     * @var string $inviteUrl
     */
    #[JsonProperty('inviteUrl')]
    public string $inviteUrl;

    /**
     * @var bool $emailSent
     */
    #[JsonProperty('emailSent')]
    public bool $emailSent;

    /**
     * @param array{
     *   id: string,
     *   email: string,
     *   role: string,
     *   expiresAt: string,
     *   inviteUrl: string,
     *   emailSent: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->email = $values['email'];
        $this->role = $values['role'];
        $this->expiresAt = $values['expiresAt'];
        $this->inviteUrl = $values['inviteUrl'];
        $this->emailSent = $values['emailSent'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
