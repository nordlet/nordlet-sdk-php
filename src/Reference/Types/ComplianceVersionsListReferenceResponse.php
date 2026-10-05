<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ComplianceVersionsListReferenceResponse extends JsonSerializableType
{
    /**
     * @var array<ComplianceVersionsListReferenceResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([ComplianceVersionsListReferenceResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<ComplianceVersionsListReferenceResponseRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rows = $values['rows'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
