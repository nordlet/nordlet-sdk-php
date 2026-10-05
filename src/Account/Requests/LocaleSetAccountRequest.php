<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Account\Types\LocaleSetAccountRequestLocale;
use Nordlet\Core\Json\JsonProperty;

class LocaleSetAccountRequest extends JsonSerializableType
{
    /**
     * @var value-of<LocaleSetAccountRequestLocale> $locale
     */
    #[JsonProperty('locale')]
    public string $locale;

    /**
     * @param array{
     *   locale: value-of<LocaleSetAccountRequestLocale>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->locale = $values['locale'];
    }
}
