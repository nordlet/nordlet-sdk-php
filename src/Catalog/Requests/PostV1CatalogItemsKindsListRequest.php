<?php

namespace Nordlet\Catalog\Requests;

use Nordlet\Core\Json\JsonSerializableType;

class PostV1CatalogItemsKindsListRequest extends JsonSerializableType
{
    /**
     * @param array{
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        unset($values);
    }
}
