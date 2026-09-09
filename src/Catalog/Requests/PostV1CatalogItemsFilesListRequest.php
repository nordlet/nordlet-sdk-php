<?php

namespace Nordlet\Catalog\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1CatalogItemsFilesListRequest extends JsonSerializableType
{
    /**
     * @var string $itemId
     */
    #[JsonProperty('itemId')]
    public string $itemId;

    /**
     * @param array{
     *   itemId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemId = $values['itemId'];
    }
}
