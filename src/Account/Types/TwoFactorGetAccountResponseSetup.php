<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class TwoFactorGetAccountResponseSetup extends JsonSerializableType
{
    /**
     * @var string $secret
     */
    #[JsonProperty('secret')]
    public string $secret;

    /**
     * @var string $otpauthUrl
     */
    #[JsonProperty('otpauthUrl')]
    public string $otpauthUrl;

    /**
     * @param array{
     *   secret: string,
     *   otpauthUrl: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->secret = $values['secret'];
        $this->otpauthUrl = $values['otpauthUrl'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
