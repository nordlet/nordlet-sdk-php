<?php

namespace Nordlet\Catalog\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Catalog\Types\UnitsOptionsCatalogRequestLocale;
use Nordlet\Core\Json\JsonProperty;

class UnitsOptionsCatalogRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<UnitsOptionsCatalogRequestLocale> $locale
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @param array{
     *   locale?: ?value-of<UnitsOptionsCatalogRequestLocale>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->locale = $values['locale'] ?? null;
    }
}
