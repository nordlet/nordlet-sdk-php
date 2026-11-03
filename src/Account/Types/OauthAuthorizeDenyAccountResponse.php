<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class OauthAuthorizeDenyAccountResponse extends JsonSerializableType
{
    /**
     * @var string $redirectTo
     */
    #[JsonProperty('redirectTo')]
    public string $redirectTo;

    /**
     * @param array{
     *   redirectTo: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->redirectTo = $values['redirectTo'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
