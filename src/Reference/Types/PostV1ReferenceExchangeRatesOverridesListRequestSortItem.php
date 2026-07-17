<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReferenceExchangeRatesOverridesListRequestSortItem extends JsonSerializableType
{
    /**
     * @var string $field
     */
    #[JsonProperty('field')]
    public string $field;

    /**
     * @var ?value-of<PostV1ReferenceExchangeRatesOverridesListRequestSortItemDir> $dir
     */
    #[JsonProperty('dir')]
    public ?string $dir;

    /**
     * @param array{
     *   field: string,
     *   dir?: ?value-of<PostV1ReferenceExchangeRatesOverridesListRequestSortItemDir>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->field = $values['field'];
        $this->dir = $values['dir'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
