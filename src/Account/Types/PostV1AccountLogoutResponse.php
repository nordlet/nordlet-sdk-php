<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountLogoutResponse extends JsonSerializableType
{
    /**
     * @var bool $loggedOut
     */
    #[JsonProperty('loggedOut')]
    public bool $loggedOut;

    /**
     * @param array{
     *   loggedOut: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->loggedOut = $values['loggedOut'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
