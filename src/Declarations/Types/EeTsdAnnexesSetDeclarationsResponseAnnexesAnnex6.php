<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex6 extends JsonSerializableType
{
    /**
     * @var array<EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex6FieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex6FieldsItem::class])]
    public array $fields;

    /**
     * @var array<EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex6ReductionsItem> $reductions
     */
    #[JsonProperty('reductions'), ArrayType([EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex6ReductionsItem::class])]
    public array $reductions;

    /**
     * @var array<EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex6RelatedPartiesItem> $relatedParties
     */
    #[JsonProperty('relatedParties'), ArrayType([EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex6RelatedPartiesItem::class])]
    public array $relatedParties;

    /**
     * @param array{
     *   fields: array<EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex6FieldsItem>,
     *   reductions: array<EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex6ReductionsItem>,
     *   relatedParties: array<EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex6RelatedPartiesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fields = $values['fields'];
        $this->reductions = $values['reductions'];
        $this->relatedParties = $values['relatedParties'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
