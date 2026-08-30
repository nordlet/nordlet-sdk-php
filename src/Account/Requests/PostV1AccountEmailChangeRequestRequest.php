<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Account\Types\PostV1AccountEmailChangeRequestRequestLocale;

class PostV1AccountEmailChangeRequestRequest extends JsonSerializableType
{
    /**
     * @var string $newEmail
     */
    #[JsonProperty('newEmail')]
    public string $newEmail;

    /**
     * @var ?value-of<PostV1AccountEmailChangeRequestRequestLocale> $locale
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @param array{
     *   newEmail: string,
     *   locale?: ?value-of<PostV1AccountEmailChangeRequestRequestLocale>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->newEmail = $values['newEmail'];
        $this->locale = $values['locale'] ?? null;
    }
}
