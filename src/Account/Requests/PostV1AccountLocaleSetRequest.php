<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Account\Types\PostV1AccountLocaleSetRequestLocale;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountLocaleSetRequest extends JsonSerializableType
{
    /**
     * @var value-of<PostV1AccountLocaleSetRequestLocale> $locale
     */
    #[JsonProperty('locale')]
    public string $locale;

    /**
     * @param array{
     *   locale: value-of<PostV1AccountLocaleSetRequestLocale>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->locale = $values['locale'];
    }
}
