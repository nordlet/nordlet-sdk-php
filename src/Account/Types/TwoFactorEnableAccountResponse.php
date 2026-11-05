<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class TwoFactorEnableAccountResponse extends JsonSerializableType
{
    /**
     * @var array<string> $recoveryCodes
     */
    #[JsonProperty('recoveryCodes'), ArrayType(['string'])]
    public array $recoveryCodes;

    /**
     * @param array{
     *   recoveryCodes: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->recoveryCodes = $values['recoveryCodes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
