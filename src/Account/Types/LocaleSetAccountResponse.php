<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class LocaleSetAccountResponse extends JsonSerializableType
{
    /**
     * @var string $locale
     */
    #[JsonProperty('locale')]
    public string $locale;

    /**
     * @var value-of<LocaleSetAccountResponseScope> $scope
     */
    #[JsonProperty('scope')]
    public string $scope;

    /**
     * @param array{
     *   locale: string,
     *   scope: value-of<LocaleSetAccountResponseScope>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->locale = $values['locale'];
        $this->scope = $values['scope'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
