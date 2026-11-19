<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class GbVatObligationsListDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var array<GbVatObligationsListDeclarationsResponseObligationsItem> $obligations
     */
    #[JsonProperty('obligations'), ArrayType([GbVatObligationsListDeclarationsResponseObligationsItem::class])]
    public array $obligations;

    /**
     * @param array{
     *   obligations: array<GbVatObligationsListDeclarationsResponseObligationsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->obligations = $values['obligations'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
