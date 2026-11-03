<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class VatClassifiersListReferenceResponseRowsItemRateFromLine extends JsonSerializableType
{
    /**
     * @var bool $sale
     */
    #[JsonProperty('sale')]
    public bool $sale;

    /**
     * @var bool $purchase
     */
    #[JsonProperty('purchase')]
    public bool $purchase;

    /**
     * @param array{
     *   sale: bool,
     *   purchase: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sale = $values['sale'];
        $this->purchase = $values['purchase'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
