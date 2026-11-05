<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class TwoFactorGetAccountResponse extends JsonSerializableType
{
    /**
     * @var bool $enabled
     */
    #[JsonProperty('enabled')]
    public bool $enabled;

    /**
     * @var bool $required
     */
    #[JsonProperty('required')]
    public bool $required;

    /**
     * @var int $recoveryCodesLeft
     */
    #[JsonProperty('recoveryCodesLeft')]
    public int $recoveryCodesLeft;

    /**
     * @var ?TwoFactorGetAccountResponseSetup $setup
     */
    #[JsonProperty('setup')]
    public ?TwoFactorGetAccountResponseSetup $setup;

    /**
     * @param array{
     *   enabled: bool,
     *   required: bool,
     *   recoveryCodesLeft: int,
     *   setup?: ?TwoFactorGetAccountResponseSetup,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->enabled = $values['enabled'];
        $this->required = $values['required'];
        $this->recoveryCodesLeft = $values['recoveryCodesLeft'];
        $this->setup = $values['setup'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
