<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Account\Types\PostV1AccountLoginLinkRequestRequestLocale;

class PostV1AccountLoginLinkRequestRequest extends JsonSerializableType
{
    /**
     * @var string $email
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?value-of<PostV1AccountLoginLinkRequestRequestLocale> $locale
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @param array{
     *   email: string,
     *   locale?: ?value-of<PostV1AccountLoginLinkRequestRequestLocale>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->email = $values['email'];
        $this->locale = $values['locale'] ?? null;
    }
}
