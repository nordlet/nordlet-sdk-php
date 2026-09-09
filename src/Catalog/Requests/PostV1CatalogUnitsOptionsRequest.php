<?php

namespace Nordlet\Catalog\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Catalog\Types\PostV1CatalogUnitsOptionsRequestLocale;
use Nordlet\Core\Json\JsonProperty;

class PostV1CatalogUnitsOptionsRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<PostV1CatalogUnitsOptionsRequestLocale> $locale
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @param array{
     *   locale?: ?value-of<PostV1CatalogUnitsOptionsRequestLocale>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->locale = $values['locale'] ?? null;
    }
}
