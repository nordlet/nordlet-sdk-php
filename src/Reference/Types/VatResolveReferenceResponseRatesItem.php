<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class VatResolveReferenceResponseRatesItem extends JsonSerializableType
{
    /**
     * @var value-of<VatResolveReferenceResponseRatesItemCategory> $category
     */
    #[JsonProperty('category')]
    public string $category;

    /**
     * @var string $ratePercent
     */
    #[JsonProperty('ratePercent')]
    public string $ratePercent;

    /**
     * @param array{
     *   category: value-of<VatResolveReferenceResponseRatesItemCategory>,
     *   ratePercent: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->category = $values['category'];
        $this->ratePercent = $values['ratePercent'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
