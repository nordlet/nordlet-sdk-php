<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Reference\Types\CnCodesUpsertReferenceRequestRowsItem;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class CnCodesUpsertReferenceRequest extends JsonSerializableType
{
    /**
     * @var array<CnCodesUpsertReferenceRequestRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([CnCodesUpsertReferenceRequestRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<CnCodesUpsertReferenceRequestRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rows = $values['rows'];
    }
}
