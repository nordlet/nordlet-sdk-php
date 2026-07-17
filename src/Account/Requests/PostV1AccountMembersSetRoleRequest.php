<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Account\Types\PostV1AccountMembersSetRoleRequestRole;

class PostV1AccountMembersSetRoleRequest extends JsonSerializableType
{
    /**
     * @var string $userId
     */
    #[JsonProperty('userId')]
    public string $userId;

    /**
     * @var value-of<PostV1AccountMembersSetRoleRequestRole> $role
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @param array{
     *   userId: string,
     *   role: value-of<PostV1AccountMembersSetRoleRequestRole>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->userId = $values['userId'];
        $this->role = $values['role'];
    }
}
