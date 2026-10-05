<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Account\Types\MembersSetRoleAccountRequestRole;

class MembersSetRoleAccountRequest extends JsonSerializableType
{
    /**
     * @var string $userId
     */
    #[JsonProperty('userId')]
    public string $userId;

    /**
     * @var value-of<MembersSetRoleAccountRequestRole> $role
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @param array{
     *   userId: string,
     *   role: value-of<MembersSetRoleAccountRequestRole>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->userId = $values['userId'];
        $this->role = $values['role'];
    }
}
