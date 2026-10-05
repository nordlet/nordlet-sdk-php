<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Reference\Types\VatClassifiersUpsertReferenceRequestRowsItem;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class VatClassifiersUpsertReferenceRequest extends JsonSerializableType
{
    /**
     * @var array<VatClassifiersUpsertReferenceRequestRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([VatClassifiersUpsertReferenceRequestRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<VatClassifiersUpsertReferenceRequestRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rows = $values['rows'];
    }
}
