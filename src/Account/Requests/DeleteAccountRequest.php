<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class DeleteAccountRequest extends JsonSerializableType
{
    /**
     * @var string $confirmEmail
     */
    #[JsonProperty('confirmEmail')]
    public string $confirmEmail;

    /**
     * @param array{
     *   confirmEmail: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->confirmEmail = $values['confirmEmail'];
    }
}
