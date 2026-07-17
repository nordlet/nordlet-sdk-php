<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Reference\Types\PostV1ReferenceCnCodesUpsertRequestRowsItem;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReferenceCnCodesUpsertRequest extends JsonSerializableType
{
    /**
     * @var array<PostV1ReferenceCnCodesUpsertRequestRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ReferenceCnCodesUpsertRequestRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1ReferenceCnCodesUpsertRequestRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rows = $values['rows'];
    }
}
