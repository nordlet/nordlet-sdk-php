<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class MembersTransferOwnershipAccountRequest extends JsonSerializableType
{
    /**
     * @var string $userId
     */
    #[JsonProperty('userId')]
    public string $userId;

    /**
     * @var ?bool $movePayer
     */
    #[JsonProperty('movePayer')]
    public ?bool $movePayer;

    /**
     * @param array{
     *   userId: string,
     *   movePayer?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->userId = $values['userId'];
        $this->movePayer = $values['movePayer'] ?? null;
    }
}
