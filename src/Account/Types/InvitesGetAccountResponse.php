<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class InvitesGetAccountResponse extends JsonSerializableType
{
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
     * @var string $companyName
     */
    #[JsonProperty('companyName')]
    public string $companyName;

    /**
     * @var bool $expired
     */
    #[JsonProperty('expired')]
    public bool $expired;

    /**
     * @var bool $userExists
     */
    #[JsonProperty('userExists')]
    public bool $userExists;

    /**
     * @param array{
     *   email: string,
     *   role: string,
     *   companyName: string,
     *   expired: bool,
     *   userExists: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->email = $values['email'];
        $this->role = $values['role'];
        $this->companyName = $values['companyName'];
        $this->expired = $values['expired'];
        $this->userExists = $values['userExists'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
