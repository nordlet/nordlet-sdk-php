<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class MembersRemoveAccountRequest extends JsonSerializableType
{
    /**
     * @var string $userId
     */
    #[JsonProperty('userId')]
    public string $userId;

    /**
     * @param array{
     *   userId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->userId = $values['userId'];
    }
}
