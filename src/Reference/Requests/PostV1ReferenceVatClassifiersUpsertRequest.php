<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Reference\Types\PostV1ReferenceVatClassifiersUpsertRequestRowsItem;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReferenceVatClassifiersUpsertRequest extends JsonSerializableType
{
    /**
     * @var array<PostV1ReferenceVatClassifiersUpsertRequestRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ReferenceVatClassifiersUpsertRequestRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1ReferenceVatClassifiersUpsertRequestRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rows = $values['rows'];
    }
}
