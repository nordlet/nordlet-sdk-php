<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class TwoFactorVerifyAccountResponse extends JsonSerializableType
{
    /**
     * @var bool $verified
     */
    #[JsonProperty('verified')]
    public bool $verified;

    /**
     * @param array{
     *   verified: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->verified = $values['verified'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
