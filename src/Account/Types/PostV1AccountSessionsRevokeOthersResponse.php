<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountSessionsRevokeOthersResponse extends JsonSerializableType
{
    /**
     * @var int $revoked
     */
    #[JsonProperty('revoked')]
    public int $revoked;

    /**
     * @param array{
     *   revoked: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->revoked = $values['revoked'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
