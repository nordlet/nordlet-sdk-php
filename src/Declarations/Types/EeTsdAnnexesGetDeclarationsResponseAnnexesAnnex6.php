<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class EeTsdAnnexesGetDeclarationsResponseAnnexesAnnex6 extends JsonSerializableType
{
    /**
     * @var array<EeTsdAnnexesGetDeclarationsResponseAnnexesAnnex6FieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([EeTsdAnnexesGetDeclarationsResponseAnnexesAnnex6FieldsItem::class])]
    public array $fields;

    /**
     * @var array<EeTsdAnnexesGetDeclarationsResponseAnnexesAnnex6ReductionsItem> $reductions
     */
    #[JsonProperty('reductions'), ArrayType([EeTsdAnnexesGetDeclarationsResponseAnnexesAnnex6ReductionsItem::class])]
    public array $reductions;

    /**
     * @var array<EeTsdAnnexesGetDeclarationsResponseAnnexesAnnex6RelatedPartiesItem> $relatedParties
     */
    #[JsonProperty('relatedParties'), ArrayType([EeTsdAnnexesGetDeclarationsResponseAnnexesAnnex6RelatedPartiesItem::class])]
    public array $relatedParties;

    /**
     * @param array{
     *   fields: array<EeTsdAnnexesGetDeclarationsResponseAnnexesAnnex6FieldsItem>,
     *   reductions: array<EeTsdAnnexesGetDeclarationsResponseAnnexesAnnex6ReductionsItem>,
     *   relatedParties: array<EeTsdAnnexesGetDeclarationsResponseAnnexesAnnex6RelatedPartiesItem>,
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
