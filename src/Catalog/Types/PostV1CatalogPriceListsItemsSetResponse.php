<?php

namespace Nordlet\Catalog\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1CatalogPriceListsItemsSetResponse extends JsonSerializableType
{
    /**
     * @var int $updated
     */
    #[JsonProperty('updated')]
    public int $updated;

    /**
     * @param array{
     *   updated: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->updated = $values['updated'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
