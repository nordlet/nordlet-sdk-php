<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class InvitesRevokeAccountResponse extends JsonSerializableType
{
    /**
     * @var bool $revoked
     */
    #[JsonProperty('revoked')]
    public bool $revoked;

    /**
     * @param array{
     *   revoked: bool,
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
